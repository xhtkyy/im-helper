<?php

namespace Xhtkyy\ImHelper\IM\Services;

use Hyperf\Di\Annotation\Inject;
use Hyperf\Grpc\StatusCode;
use Im\V1\Group;
use Im\V1\GroupCreat;
use Im\V1\GroupSrvClient;
use Im\V1\GroupTypCode;
use Im\V1\ID;
use Im\V1\Member;
use Im\V1\MemberID;
use Im\V1\MemberSrvClient;
use Xhtkyy\ImHelper\IM\Interface\GroupInterface;
use Xhtkyy\ImHelper\IM\properties\DepartmentProperty;
use Xhtkyy\ImHelper\IM\properties\GroupProperty;
use Xhtkyy\ImHelper\IM\properties\MemberProperty;

class GroupService implements GroupInterface {
    #[Inject]
    protected GroupSrvClient $groupSrvClient;
    #[Inject]
    protected MemberSrvClient $memberSrvClient;

    public function create(DepartmentProperty $department, array $rids, array $openIDs, bool $isAllStaff = false): string {
        $current   = time();
        $groupType = $isAllStaff ? GroupTypCode::COMPANY : GroupTypCode::DEPARTMENT;
        $group     = (new Group())->setTeam($department->getTeamId()) //所属组织
        ->setType($groupType) //类型
        ->setName($department->getDepartmentName()) //群名称
        ->setCreator($department->getGroupLeader()) //创建人 系统创建的根据成都伙伴确认直接使用群主 部门群群主在创建时是集合中第一人
        ->setCreated($current) //创建时间
        ->setCreatorCard($department->getCreatorCard()); //所有者身份卡ID
        $members   = [];
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

    public function delete(string $imGroup): bool {
        $groupID = (new ID())->setId($imGroup);
        [, $status] = $this->groupSrvClient->DeleteGroup($groupID);
        return $status == StatusCode::OK;
    }

    public function modifyGroupMember(MemberProperty $member, bool $isAdd = true): bool {
        $imMember = (new Member())->setOpenid($member->getOpenId())
            ->setGroup($member->getImGroup());
        if ($isAdd) {
            $imMember = $imMember->setJoined(time());
        }
        [, $status] = $this->memberSrvClient->UpdateMember($imMember);
        return $status == StatusCode::OK;
    }

    public function deleteGroupMember(MemberProperty $member): bool {
        $imMember = (new MemberID())->setOpenid($member->getOpenId())
            ->setGroup($member->getImGroup())
            ->setRid($member->getRid());
        [, $status] = $this->memberSrvClient->DeleteMember($imMember);
        return $status == StatusCode::OK;
    }

    public function updateGroup(GroupProperty $group): bool {
        $imGroup = new Group();
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
}