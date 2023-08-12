<?php

namespace Xhtkyy\ImHelper\IM\Interface;

interface AccountInterface {
    /**
     * 获取指定账号个人档案
     * @param $openID
     * @return array
     */
    public function who($openID): array;
}