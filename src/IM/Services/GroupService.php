<?php

namespace Xhtkyy\ImHelper\IM\Services;

use Exception;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Grpc\StatusCode;
use Im\V1\Group;
use Im\V1\GroupCreat;
use Im\V1\GroupQuery;
use Im\V1\GroupSrvClient;
use Im\V1\GroupTypCode;
use Im\V1\ID;
use Im\V1\Member;
use Im\V1\MemberID;
use Im\V1\MemberQuery;
use Im\V1\MemberSrvClient;
use Im\V1\Pagination;
use Im\V1\RespArr;
use Xhtkyy\ImHelper\IM\Interface\GroupInterface;
use Xhtkyy\ImHelper\IM\properties\DepartmentProperty;
use Xhtkyy\ImHelper\IM\properties\GroupProperty;
use Xhtkyy\ImHelper\IM\properties\MemberProperty;

class GroupService implements GroupInterface
{
    #[Inject]
    protected GroupSrvClient $groupSrvClient;
    #[Inject]
    protected MemberSrvClient $memberSrvClient;

    public function create(DepartmentProperty $department, array $rids, array $openIDs, bool $isAllStaff = false): string
    {
        $current = time();
        $groupType = $isAllStaff ? GroupTypCode::COMPANY : GroupTypCode::DEPARTMENT;
        $group = (new Group())->setTeam($department->getTeamId()) //所属组织
        ->setType($groupType) //类型
        ->setName($department->getDepartmentName()) //群名称
        ->setCreator($department->getGroupLeader()) //创建人 系统创建的根据成都伙伴确认直接使用群主 部门群群主在创建时是集合中第一人
        ->setCreated($current) //创建时间
        ->setCreatorCard($department->getCreatorCard()); //所有者身份卡ID
        $members = [];
        foreach ($openIDs as $openID) {
            $members[] = (new Member())->setOpenid($openID) // 个人标识
            ->setJoined($current); //加入时间
        }
        $creat = (new GroupCreat())->setGroup($group)->setRids($rids)->setMembers($members);
        /**
         * @var Group $reply
         */
        [$reply, $status] = $this->groupSrvClient->CreateGroup($creat);
        $imGroup = '';
        if ($status == StatusCode::OK) {
            $imGroup = $reply->getGroup();
        }
        return $imGroup;
    }

    public function delete(string $imGroup): bool
    {
        $groupID = (new ID())->setId($imGroup);
        [, $status] = $this->groupSrvClient->DeleteGroup($groupID);
        return $status == StatusCode::OK;
    }

    public function modifyGroupMember(MemberProperty $member, bool $isAdd = true): bool
    {
        $imMember = (new Member())->setOpenid($member->getOpenId())
            ->setGroup($member->getImGroup());
        if ($isAdd) {
            $imMember = $imMember->setJoined(time());
        }
        [, $status] = $this->memberSrvClient->UpdateMember($imMember);
        return $status == StatusCode::OK;
    }

    public function deleteGroupMember(MemberProperty $member): bool
    {
        $imMember = (new MemberID())->setOpenid($member->getOpenId())
            ->setGroup($member->getImGroup())
            ->setRid($member->getRid());
        [, $status] = $this->memberSrvClient->DeleteMember($imMember);
        return $status == StatusCode::OK;
    }

    public function updateGroup(GroupProperty $group): bool
    {
        $imGroup = (new Group())->setGroup($group->getImGroup());
        if (!empty($group->getGroupName())) {
            $imGroup->setName($group->getGroupName()); //群名称
        }
        if (!empty($group->getGroupLeader())) {
            $imGroup->setCreator($group->getGroupLeader()); //群主
        }
        if ($imGroup->getName() || $imGroup->getCreator()) {
            //有修改就进来，没修改直接返回成功
            [, $status] = $this->groupSrvClient->UpdateGroup($imGroup);
            return $status == StatusCode::OK;
        }
        return true;
    }

    /**
     * @throws Exception
     */
    public function getGroupInfo(string $imGroup): array
    {
        $groupID = (new ID())->setId($imGroup);
        /**
         * @var Group $reply
         */
        [$reply, $status] = $this->groupSrvClient->GetGroup($groupID);
        if ($status != StatusCode::OK) {
            throw new Exception('调用groupSrv GetGroup失败.');
        }
        return json_decode($reply->serializeToJsonString(), true);
    }

    /**
     * @throws Exception
     */
    public function getGroupMembers(string $imGroup, int $index = 0, int $size = 10000): array
    {
        $memberQuery = (new MemberQuery())->setGroup($imGroup);
        $pagination = (new Pagination())
            ->setIndex($index)
            ->setSize($size)
            ->setMember($memberQuery);
        /**
         * @var RespArr $reply
         */
        [$reply, $status] = $this->memberSrvClient->ListMember($pagination);
        if ($status != StatusCode::OK) {
            throw new Exception('调用memberSrv ListMember失败.');
        }
        $result = json_decode($reply->serializeToJsonString(), true);
        if (empty($result['members']['arr'])) {
            throw new Exception('调用memberSrv ListMember返回数据不合法，返回结果：' . $reply->serializeToJsonString());
        }
        return $result['members']['arr'];
    }

    /**
     * 获取群列表
     * @param $teamId
     * @param array $cardIds
     * @param int $page
     * @param int $pageSize
     * @return array
     * @throws Exception
     */
    public function getList($teamId, array $cardIds, int $page = 1, int $pageSize = 20): array
    {
        /**
         * @var RespArr|string $reply
         */
        [$reply, $status] = $this->groupSrvClient->ListGroup(
            (new Pagination())
                ->setIndex($page - 1)
                ->setSize($pageSize)
                ->setGroup((new GroupQuery())->setTeam($teamId)->setCardIds($cardIds))
        );
        if ($status != StatusCode::OK) {
            throw new Exception((string)$reply);
        }

        return $reply->hasGroups() ? json_decode($reply->getGroups()->serializeToJsonString(), true)['arr'] : [];
    }

    public function closeSyncDisk(string $groupId): bool
    {
        [, $status] = $this->groupSrvClient->CloseGroupFileSync((new ID())->setId($groupId));
        return $status == StatusCode::OK;
    }
}