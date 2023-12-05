<?php

namespace Xhtkyy\ImHelper\IM\properties;
/**
 * 群成员 attachments
 * {
 * "avatar": "", // 头像
 * "cardId": "#105", // 身份卡id
 * "comment": null,  // 备注
 * "departmentId": "", // 部门Id
 * "departmentName": null, // 部门名
 * "jobId": null, // 岗位id
 * "jobName": null, // 岗位名
 * "nickname": null, // 昵称
 * "noDisturb": null, // 免打扰 后面变int了
 * "openId": "25yio0000nlngalpmc", // openid
 * "staffName": "斗破苍穹萧炎", // 员工名称/ 个人名称
 * "stayOn": null, // 置顶
 * "teamId": "87", // 组织Id
 * "teamName": "艳阳高照集团", // 组织名
 * "viewHistory": true // 是否允许查看历史记录
 * }
 */
class MemberAttachmentProperty extends Property {
    public string $avatar = ''; //头像
    public string $cardId = ''; //身份卡id
    public ?string $comment = null; //备注
    public string $departmentId = ''; //部门Id
    public ?string $departmentName = null; //部门名
    public ?string $jobId = null; //岗位id
    public ?string $jobName = null; //岗位名
    public ?string $nickname = null; //昵称
    public int $noDisturb = 0; //免打扰
    public string $openId = ''; //openid
    public string $staffName = ''; //  员工名称/个人名称
    public ?string $stayOn = null; //置顶
    public string $teamId = ''; //组织Id
    public string $teamName = ''; //组织名
    public bool $viewHistory = true; //是否允许查看历史记录

    /**
     * @return string
     */
    public function getAvatar(): string {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return MemberAttachmentProperty
     */
    public function setAvatar(string $avatar): static {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardId(): string {
        return $this->cardId;
    }

    /**
     * @param string $cardId
     * @return MemberAttachmentProperty
     */
    public function setCardId(string $cardId): static {
        $this->cardId = $cardId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     * @return MemberAttachmentProperty
     */
    public function setComment(?string $comment): static {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartmentId(): string {
        return $this->departmentId;
    }

    /**
     * @param string $departmentId
     * @return MemberAttachmentProperty
     */
    public function setDepartmentId(string $departmentId): static {
        $this->departmentId = $departmentId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartmentName(): ?string {
        return $this->departmentName;
    }

    /**
     * @param string|null $departmentName
     * @return MemberAttachmentProperty
     */
    public function setDepartmentName(?string $departmentName): static {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJobId(): ?string {
        return $this->jobId;
    }

    /**
     * @param string|null $jobId
     * @return MemberAttachmentProperty
     */
    public function setJobId(?string $jobId): static {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJobName(): ?string {
        return $this->jobName;
    }

    /**
     * @param string|null $jobName
     * @return MemberAttachmentProperty
     */
    public function setJobName(?string $jobName): static {
        $this->jobName = $jobName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNickname(): ?string {
        return $this->nickname;
    }

    /**
     * @param string|null $nickname
     * @return MemberAttachmentProperty
     */
    public function setNickname(?string $nickname): static {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNoDisturb(): ?string {
        return $this->noDisturb;
    }

    /**
     * @param string|null $noDisturb
     * @return MemberAttachmentProperty
     */
    public function setNoDisturb(?string $noDisturb): static {
        $this->noDisturb = $noDisturb;
        return $this;
    }

    /**
     * @return string
     */
    public function getOpenId(): string {
        return $this->openId;
    }

    /**
     * @param string $openId
     * @return MemberAttachmentProperty
     */
    public function setOpenId(string $openId): static {
        $this->openId = $openId;
        return $this;
    }

    /**
     * @return string
     */
    public function getStaffName(): string {
        return $this->staffName;
    }

    /**
     * @param string $staffName
     * @return MemberAttachmentProperty
     */
    public function setStaffName(string $staffName): static {
        $this->staffName = $staffName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStayOn(): ?string {
        return $this->stayOn;
    }

    /**
     * @param string|null $stayOn
     * @return MemberAttachmentProperty
     */
    public function setStayOn(?string $stayOn): static {
        $this->stayOn = $stayOn;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamId(): string {
        return $this->teamId;
    }

    /**
     * @param string $teamId
     * @return MemberAttachmentProperty
     */
    public function setTeamId(string $teamId): static {
        $this->teamId = $teamId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTeamName(): string {
        return $this->teamName;
    }

    /**
     * @param string $teamName
     * @return MemberAttachmentProperty
     */
    public function setTeamName(string $teamName): static {
        $this->teamName = $teamName;
        return $this;
    }

    /**
     * @return bool
     */
    public function isViewHistory(): bool {
        return $this->viewHistory;
    }

    /**
     * @param bool $viewHistory
     * @return MemberAttachmentProperty
     */
    public function setViewHistory(bool $viewHistory): static {
        $this->viewHistory = $viewHistory;
        return $this;
    }


}