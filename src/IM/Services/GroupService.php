<?php

namespace Xhtkyy\ImHelper\IM\Services;

use Exception;
use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Grpc\StatusCode;
use Im\V1\ClientAttr;
use Im\V1\ClientAttrGroup;
use Im\V1\Group;
use Im\V1\GroupCreat;
use Im\V1\GroupQuery;
use Im\V1\GroupSrvClient;
use Im\V1\GroupTransfer;
use Im\V1\GroupTypCode;
use Im\V1\ID;
use Im\V1\Member;
use Im\V1\MemberCreat;
use Im\V1\MemberID;
use Im\V1\MemberQuery;
use Im\V1\MemberSrvClient;
use Im\V1\Pagination;
use Im\V1\RespArr;
use Xhtkyy\ImHelper\Exception\GroupNotFoundException;
use Xhtkyy\ImHelper\IM\Interface\GroupInterface;
use Xhtkyy\ImHelper\IM\properties\DepartmentProperty;
use Xhtkyy\ImHelper\IM\properties\GroupProperty;
use Xhtkyy\ImHelper\IM\properties\MemberProperty;

class GroupService implements GroupInterface {
    #[Inject]
    protected GroupSrvClient $groupSrvClient;
    #[Inject]
    protected MemberSrvClient $memberSrvClient;
    #[Inject]
    protected StdoutLoggerInterface $logger;

    public function create(DepartmentProperty $department, array $rids, array $members, bool $isAllStaff = false): string {
        $current   = time();
        $groupType = $isAllStaff ? GroupTypCode::COMPANY : GroupTypCode::DEPARTMENT;
        //TODO::
        $groupAttachment = $department->getAttachment();
        $clientAttrGroup = (new ClientAttrGroup())->setTeamName($groupAttachment['teamName'])
            ->setAvatar($groupAttachment['avatar'])
            ->setHasInviteMember($groupAttachment['hasInviteMember'])
            ->setHasLookForHistory($groupAttachment['hasLookForHistory'])
            ->setOpenPictureFile($groupAttachment['openCloudFile'])
            ->setOpenPictureFile($groupAttachment['openPictureFile']);
        $group           = (new Group())->setTeam($department->getTeamId()) //所属组织
        ->setOwner($department->getGroupLeader()) //群主 系统创建的根据成都伙伴确认直接使用群主 部门群群主在创建时是集合中第一人
        ->setType($groupType) //类型
        ->setName($department->getDepartmentName()) //群名称
        ->setCreator($department->getCreator()) //创建人
        ->setCreated($current) //创建时间
//        ->setAttachment(array_to_struct($department->getAttachment())) //附加值
        ->setAttachment($clientAttrGroup) //附加值
        ->setCreatorCard($department->getCreatorCard()); //所有者身份卡ID
        $groupMembers    = [];
        foreach ($members as $member) {
            $groupMembers[] = (new Member())
//                ->setOpenid($member['openId']) // 个人标识
                ->setOpenid($member['cardId']) //2023.07.27 秋廷要求将openID的值换成cardId
                ->setAttachments($this->setClientAttr($member)) //附加值
//                ->setAttachments(array_to_struct($member)) //附加值
                ->setJoined($current); //加入时间
        }
        $creat = (new GroupCreat())->setGroup($group)->setRids($rids)->setMembers($groupMembers);
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

    private function setClientAttr(array $member): ClientAttr {
        return (new ClientAttr())->setAvatar($member['avatar'])
            ->setCardId($member['cardId'])
            ->setComment($member['comment'])
            ->setDepartmentId($member['departmentId'])
            ->setDepartmentName($member['departmentName'])
            ->setJobId($member['jobId'])
            ->setJobName($member['jobName'])
            ->setNickname($member['nickname'])
            ->setNoDisturb($member['noDisturb'])
            ->setOpenId($member['openId'])
            ->setStaffName($member['staffName'])
            ->setStayOn($member['stayOn'])
            ->setTeamId($member['teamId'])
            ->setTeamName($member['teamName'])
            ->setViewHistory($member['viewHistory']);
    }

    public function modifyGroupMember(MemberProperty $member, bool $isAdd = true): bool {
        $imMember = (new Member())
//            ->setOpenid($member->getOpenId())
            ->setOpenid($member->getCardID()) //2023.07.27 秋廷要求将openID的值换成cardId
            ->setAttachments($this->setClientAttr($member->getAttachment()))
//            ->setAttachments(array_to_struct($member->getAttachment())) //附加值
            ->setGroup($member->getImGroup());
        if ($isAdd) {
            $imMember    = $imMember->setJoined(time());
            $memberCreat = (new MemberCreat())->setFromServer(true)->setRid($member->getRid())->setMember($imMember);
            [, $status] = $this->memberSrvClient->CreateMember($memberCreat);
        } else {
            [, $status] = $this->memberSrvClient->UpdateMember($imMember);
        }
        return $status == StatusCode::OK;
    }

    public function deleteGroupMember(MemberProperty $member): bool {
        $imMember = (new MemberID())
            ->setOpenid($member->getCardID()) //这里经过验证也要传cardID
            ->setGroup($member->getImGroup())
            ->setFromServer(true) //代表服务端调用
            ->setRid($member->getRid());
        [, $status] = $this->memberSrvClient->DeleteMember($imMember);
        return $status == StatusCode::OK;
    }

    public function updateGroup(GroupProperty $group): bool {
        $imGroup = (new Group())->setGroup($group->getImGroup())->setUpdated(time());
        if (!empty($group->getGroupName())) {
            $imGroup->setName($group->getGroupName()); //群名称
        }
        //部门对接群相关修改 目前仅支持部门名称的修改 修改和业务关联的 其他的交回IM处理 先过滤
        if ($imGroup->getName()) {
            //有修改就进来，没修改直接返回成功
            [, $status] = $this->groupSrvClient->UpdateGroup($imGroup);
            return $status == StatusCode::OK;
        }
        return true;
    }

    /**
     * @throws Exception
     */
    public function getGroupInfo(string $imGroup): array {
        $groupID = (new ID())->setId($imGroup);
        /**
         * @var Group|string $reply
         */
        [$reply, $status] = $this->groupSrvClient->GetGroup($groupID);
        if ($status != StatusCode::OK) {
            if ($reply == 'record not found') {
                throw new GroupNotFoundException();
            }
            throw new Exception('调用groupSrv GetGroup失败.');
        }
        return json_decode($reply->serializeToJsonString(), true);
    }

    /**
     * @throws Exception
     */
    public function getGroupMembers(string $imGroup, int $index = 0, int $size = 10000): array {
        $memberQuery = (new MemberQuery())->setGroup($imGroup);
        $pagination  = (new Pagination())
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
            throw new Exception(sprintf('调用memberSrv ListMember返回数据不合法，返回结果：%s,请求参数：%s', $reply->serializeToJsonString(), $pagination->serializeToJsonString()));
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
    public function getList($teamId, array $cardIds, int $page = 1, int $pageSize = 20): array {
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

    public function closeSyncDisk(string $groupId): bool {
        [, $status] = $this->groupSrvClient->CloseGroupFileSync((new ID())->setId($groupId));
        return $status == StatusCode::OK;
    }

    public function transferGroup(string $imGroup, string $oldOwner, string $newOwner): bool {
        [, $status] = $this->groupSrvClient->TransferGroup((new GroupTransfer())
            ->setGroup($imGroup)
            ->setOldOwner($oldOwner)
            ->setNewOwner($newOwner)
        );
        return $status == StatusCode::OK;
    }

    /**
     * @param string $imGroup
     * @return bool
     * @throws Exception
     */
    public function updateGroupAvaTar(string $imGroup): bool {
        return true;
        $groupInfo = $this->getGroupInfo($imGroup);
        if (!empty($groupInfo['attachment']['avatar'])
            && !str_contains($groupInfo['attachment']['avatar'], '|')
            && filter_var($groupInfo['attachment']['avatar'], FILTER_VALIDATE_URL) !== false
        ) {
            //存在头像且头像是合法的URL且不带|分隔符代表是用户自定义了头像 将不再更新群头像
            return true;
        }
        //获取群成员
        $members   = $this->getGroupMembers($imGroup);
        $allAvatar = [];
        $teamName  = '';
        foreach ($members as $member) {
            $attachments = $member['attachments'] ?? [];
            if (empty($attachments)) {
                continue;
            }
            if (empty($teamName)) {
                $teamName = $attachments['teamName'] ?? '';
            }
            if (!empty($attachments['avatar'])) {
                //有头像用头像
                $allAvatar[] = $attachments['avatar'];
            } else {
                $allAvatar[] = $attachments['staffName'];
            }
        }
        if (empty($teamName)) {
            //如果还没有 取群的
            $teamName = empty($groupInfo['attachment']['teamName']) ? '' : $groupInfo['attachment']['teamName'];
        }
        if (empty($allAvatar) || empty($teamName)) {
            $data = json_encode([
                'allAvatar' => $allAvatar,
                'teamName'  => $teamName
            ], JSON_UNESCAPED_UNICODE);
            $this->logger->warning("修改群头像失败，原因是未获取到群头像数据或者组织名称数据，获取数据为：{$data}");
            return false;
        }
//        $groupAttachment = (new GroupAttachmentProperty())->setTeamName($teamName)
//            ->setAvatar(implode('|', $allAvatar))->toArray();
//
//        $group = (new Group())->setGroup($imGroup)->setAttachment(array_to_struct($groupAttachment))->setUpdated(time());
        $clientAttrGroup = (new ClientAttrGroup())->setTeamName($teamName)
            ->setAvatar(implode('|', $allAvatar));
        $group           = (new Group())->setGroup($imGroup)->setAttachment($clientAttrGroup)->setUpdated(time());
        [, $status] = $this->groupSrvClient->UpdateGroup($group);
        return $status == StatusCode::OK;
    }
}