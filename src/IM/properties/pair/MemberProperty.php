<?php

namespace Xhtkyy\ImHelper\IM\properties\pair;

use Xhtkyy\ImHelper\IM\properties\Property;

class MemberProperty extends Property {

    public string $avatar = ''; //头像
    public string $cardId = ''; //身份卡标识
    public string $comment = ""; //备注
    public int $departmentId = 0; //部门标识
    public string $departmentName = ""; //部门名称
    public string $jobId = ""; //职位标识
    public string $jobName = ""; //职位名称
    public string $nickname = ""; //
    public string $openId = "";
    public string $staffName = ""; //员工名称
    public int $stayOn = 0; //是否置顶
    public string $teamId = ""; //组织标识
    public string $teamName = "";//组织名称

    /**
     * @return string
     */
    public function getAvatar(): string {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return MemberProperty
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
     * @return MemberProperty
     */
    public function setCardId(string $cardId): static {
        $this->cardId = $cardId;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment(): string {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return MemberProperty
     */
    public function setComment(string $comment): static {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return int
     */
    public function getDepartmentId(): int {
        return $this->departmentId;
    }

    /**
     * @param int $departmentId
     * @return MemberProperty
     */
    public function setDepartmentId(int $departmentId): static {
        $this->departmentId = $departmentId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartmentName(): string {
        return $this->departmentName;
    }

    /**
     * @param string $departmentName
     * @return MemberProperty
     */
    public function setDepartmentName(string $departmentName): static {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobId(): string {
        return $this->jobId;
    }

    /**
     * @param string $jobId
     * @return MemberProperty
     */
    public function setJobId(string $jobId): static {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * @return string
     */
    public function getJobName(): string {
        return $this->jobName;
    }

    /**
     * @param string $jobName
     * @return MemberProperty
     */
    public function setJobName(string $jobName): static {
        $this->jobName = $jobName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNickname(): string {
        return $this->nickname;
    }

    /**
     * @param string $nickname
     * @return MemberProperty
     */
    public function setNickname(string $nickname): static {
        $this->nickname = $nickname;
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
     * @return MemberProperty
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
     * @return MemberProperty
     */
    public function setStaffName(string $staffName): static {
        $this->staffName = $staffName;
        return $this;
    }

    /**
     * @return int
     */
    public function getStayOn(): int {
        return $this->stayOn;
    }

    /**
     * @param int $stayOn
     * @return MemberProperty
     */
    public function setStayOn(int $stayOn): static {
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
     * @return MemberProperty
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
     * @return MemberProperty
     */
    public function setTeamName(string $teamName): static {
        $this->teamName = $teamName;
        return $this;
    }
}