<?php

namespace Xhtkyy\ImHelper\IM\properties\pair;

use Xhtkyy\ImHelper\IM\Constant\PairType;
use Xhtkyy\ImHelper\IM\properties\Property;

class PairProperty extends Property {

    public string $main = '';//单聊发起人
    public string $peer = '';//单聊接收人
    public string $type = PairType::CONSULT; //会话类型 （包含普通好友、商务好友、同事、临时会话、咨询会话） 应用主要针对的是咨询类型因此设置为默认

    /**
     * @return string
     */
    public function getMain(): string {
        return $this->main;
    }

    /**
     * @param string $main
     * @return PairProperty
     */
    public function setMain(string $main): static {
        $this->main = $main;
        return $this;
    }

    /**
     * @return string
     */
    public function getPeer(): string {
        return $this->peer;
    }

    /**
     * @param string $peer
     * @return PairProperty
     */
    public function setPeer(string $peer): static {
        $this->peer = $peer;
        return $this;
    }


    /**
     * @return string
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * @param string $type
     * @return PairProperty
     */
    public function setType(string $type): static {
        $this->type = $type;
        return $this;
    }


}