<?php

namespace Xhtkyy\ImHelper\IM\Interface;

use Im\V1\Pair;
use Xhtkyy\ImHelper\IM\properties\pair\MemberProperty;
use Xhtkyy\ImHelper\IM\properties\pair\PairProperty;

/**
 * 单聊相关的抽象接口
 */
interface PairInterface {
    /**
     * 创建单聊关系/会话
     * @param PairProperty $pairProperty 单聊关系建立参数集对象
     * @param array $members 会话双方信息
     * @return array
     */
    public function createPair(PairProperty $pairProperty, array $members): array;

    /**
     * 获取单聊关系明细
     * @param string $main 单聊发起人身份标识
     * @param string $peer 单聊接受者身份标识
     * @param bool $history
     * @param bool $is_array 是否返回数组类型
     * @return array|Pair
     */
    public function getPairInfo(string $main, string $peer, bool $history = false, bool $is_array = true): array|Pair;

    /**
     * 修改单聊的类型（业务不掺杂其他内容的调整因此暂不接收除了会话类型以外的修改）
     * @param string $main
     * @param string $peer
     * @param string $type
     * @return bool
     */
    public function updatePairType(string $main, string $peer, string $type): bool;

    /**
     * 删除单聊
     * @param string $main 单聊发起人身份标识
     * @param string $peer 单聊接受者身份标识
     * @return bool
     */
    public function deletePair(string $main, string $peer): bool;

}