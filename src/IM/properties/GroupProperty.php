<?php

namespace Xhtkyy\ImHelper\IM\properties;

class GroupProperty {

    /**
     * @var string
     */
    private string $imGroup;
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

    /**
     * @return string
     */
    public function getImGroup(): string {
        return $this->imGroup;
    }

    /**
     * @param string $imGroup
     * @return GroupProperty
     */
    public function setImGroup(string $imGroup): static {
        $this->imGroup = $imGroup;
        return $this;
    }



}