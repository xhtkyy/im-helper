<?php

namespace Xhtkyy\ImHelper\IM\properties;

class DepartmentProperty extends Property {
    /**
     * @var int
     */
    public int $idDepartment = 0;
    /**
     * @var string
     */
    public string $departmentName = '';
    /**
     * @var string
     */
    public string $teamId = '';
    /**
     * @var string
     */
    public string $groupLeader = '';

    /**
     * @var string
     */
    public string $creatorCard = '';

    public array $attachment = [];

    /**
     * @return int
     */
    public function getIdDepartment(): int {
        return $this->idDepartment;
    }

    /**
     * @param int $idDepartment
     * @return DepartmentProperty
     */
    public function setIdDepartment(int $idDepartment): static {
        $this->idDepartment = $idDepartment;
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
     * @return DepartmentProperty
     */
    public function setDepartmentName(string $departmentName): static {
        $this->departmentName = $departmentName;
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
     * @return DepartmentProperty
     */
    public function setTeamId(string $teamId): static {
        $this->teamId = $teamId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupLeader(): string {
        return $this->groupLeader;
    }

    /**
     * @param string $groupLeader
     * @return DepartmentProperty
     */
    public function setGroupLeader(string $groupLeader): static {
        $this->groupLeader = $groupLeader;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatorCard(): string {
        return $this->creatorCard;
    }

    /**
     * @param string $creatorCard
     * @return DepartmentProperty
     */
    public function setCreatorCard(string $creatorCard): static {
        $this->creatorCard = $creatorCard;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttachment(): array {
        return $this->attachment;
    }

    /**
     * @param array $attachment
     * @return DepartmentProperty
     */
    public function setAttachment(array $attachment): static {
        $this->attachment = $attachment;
        return $this;
    }

}