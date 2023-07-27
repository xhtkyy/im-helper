<?php

namespace Xhtkyy\ImHelper\IM\properties;

class GroupProperty extends Property {

    /**
     * @var string
     */
    public string $imGroup;
    /**
     * @var string
     */
    public string $groupName = '';
    /**
     * @var string
     */
    public string $groupLeader = '';

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