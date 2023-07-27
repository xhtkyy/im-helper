<?php

namespace Xhtkyy\ImHelper\IM\properties;

abstract class Property {
    /**
     * @return array
     */
    public function toArray(): array {
        return get_object_vars($this);
    }

}