<?php

namespace Xhtkyy\ImHelper\IM\properties;

class GroupProperty {
    /**
     * @var string
     */
    private string $groupName = '';
    /**
     * @var string
     */
    private string $groupLeader = '';

    /**
     * @return string
     */
    public function getGroupName(): string {
        return $this->groupName;
    }

    /**
     * @param string $groupName
     * @return GroupProperty
     */
    public function setGroupName(string $groupName): static {
        $this->groupName = $groupName;
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
     * @return GroupProperty
     */
    public function setGroupLeader(string $groupLeader): static {
        $this->groupLeader = $groupLeader;
        return $this;
    }

}