<?php

namespace Xhtkyy\ImHelper\IM\properties;
/**
 * 群 attachment
 * {
 * "avatar": "issac002|issac001|issac003", // 群头像
 * "hasInviteMember": false, // 是否能要求群成员
 * "hasLookForHistory": false, // 新成员是否能查看历史记录
 * "openCloudFile": true, // 群文件同步懂啊云盘
 * "openPictureFile": true, // 群图片同步到云盘
 * "teamName": "issac测试公司" // 团队名
 * }
 */
class GroupAttachmentProperty extends Property {

    public string $avatar = ''; //群头像

    public bool $hasInviteMember = false; //是否能邀请群成员

    public bool $hasLookForHistory = false; //新成员是否能查看历史记录

    public bool $openCloudFile = false; //群文件同步到云盘 部门群默认不开启

    public bool $openPictureFile = false;//群图片同步到云盘 部门群默认不开启

    public string $teamName = '';//团队名

    /**
     * @return string
     */
    public function getAvatar(): string {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return GroupAttachmentProperty
     */
    public function setAvatar(string $avatar): static {
        $this->avatar = $avatar;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasInviteMember(): bool {
        return $this->hasInviteMember;
    }

    /**
     * @param bool $hasInviteMember
     * @return GroupAttachmentProperty
     */
    public function setHasInviteMember(bool $hasInviteMember): static {
        $this->hasInviteMember = $hasInviteMember;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasLookForHistory(): bool {
        return $this->hasLookForHistory;
    }

    /**
     * @param bool $hasLookForHistory
     * @return GroupAttachmentProperty
     */
    public function setHasLookForHistory(bool $hasLookForHistory): static {
        $this->hasLookForHistory = $hasLookForHistory;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOpenCloudFile(): bool {
        return $this->openCloudFile;
    }

    /**
     * @param bool $openCloudFile
     * @return GroupAttachmentProperty
     */
    public function setOpenCloudFile(bool $openCloudFile): static {
        $this->openCloudFile = $openCloudFile;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOpenPictureFile(): bool {
        return $this->openPictureFile;
    }

    /**
     * @param bool $openPictureFile
     * @return GroupAttachmentProperty
     */
    public function setOpenPictureFile(bool $openPictureFile): static {
        $this->openPictureFile = $openPictureFile;
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
     * @return GroupAttachmentProperty
     */
    public function setTeamName(string $teamName): static {
        $this->teamName = $teamName;
        return $this;
    }


}