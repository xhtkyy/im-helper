<?php

namespace Xhtkyy\ImHelper\IM\properties;

class MemberProperty extends Property {
    /**
     * @var string
     */
    public string $openId = '';
    /**
     * @var string
     */
    public string $imGroup = '';
    /**
     * @var string
     */
    public string $rid = '';

    public array $attachment = [];

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

    /**
     * @return array
     */
    public function getAttachment(): array {
        return $this->attachment;
    }

    /**
     * @param array $attachment
     * @return MemberProperty
     */
    public function setAttachment(array $attachment): static {
        $this->attachment = $attachment;
        return $this;
    }
}