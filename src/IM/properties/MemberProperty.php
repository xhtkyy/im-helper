<?php

namespace Xhtkyy\ImHelper\IM\properties;

class MemberProperty {
    /**
     * @var string
     */
    private string $openId = '';
    /**
     * @var string
     */
    private string $imGroup = '';
    /**
     * @var string
     */
    private string $rid = '';

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
    public function getImGroup(): string {
        return $this->imGroup;
    }

    /**
     * @param string $imGroup
     * @return MemberProperty
     */
    public function setImGroup(string $imGroup): static {
        $this->imGroup = $imGroup;
        return $this;
    }

    /**
     * @return string
     */
    public function getRid(): string {
        return $this->rid;
    }

    /**
     * @param string $rid
     * @return MemberProperty
     */
    public function setRid(string $rid): static {
        $this->rid = $rid;
        return $this;
    }
}