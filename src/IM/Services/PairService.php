<?php

namespace Xhtkyy\ImHelper\IM\Services;

use Exception;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Grpc\StatusCode;
use Im\V1\Pair;
use Im\V1\PairID;
use Im\V1\PairSrvClient;
use Xhtkyy\ImHelper\IM\Constant\PairType;
use Xhtkyy\ImHelper\IM\Interface\PairInterface;
use Xhtkyy\ImHelper\IM\properties\pair\PairProperty;

class PairService implements PairInterface {
    #[Inject]
    protected PairSrvClient $pairSrvClient;

    /**
     * @throws Exception
     */
    public function createPair(PairProperty $pairProperty, array $members): array {
        $attachment = [
            'creatorCardId' => $pairProperty->getMain(),
            'member'        => $members,
            'relation'      => $pairProperty->getType()
        ];
        $pair       = (new Pair())->setMain($pairProperty->getMain())
            ->setPeer($pairProperty->getPeer())
            ->setAttachment(array_to_struct($attachment))
            ->setOrigin($pairProperty->getType());
        [$reply, $status] = $this->pairSrvClient->CreatePair($pair);
        if ($status != StatusCode::OK) {
            throw new Exception('PairSrv CreatePair失败，原因：' . $reply);
        }
        /**
         * @var Pair $reply
         */
        return [
            'lid'  => $reply->getLid(),
            'main' => $reply->getMain(),
            'peer' => $reply->getPeer()
        ];
    }

    /**
     * @throws Exception
     */
    public function getPairInfo(string $main, string $peer, bool $history = false, bool $is_array = true): array|Pair {
        $condition = (new PairID())->setMain($main)->setPeer($peer)->setHistory($history);
        /**
         * @var Pair $reply
         */
        [$reply, $status] = $this->pairSrvClient->GetPair($condition);
        if ($status != StatusCode::OK) {
            throw new Exception('调用PairSrv GetPair失败.');
        }
        return $is_array ? json_decode($reply->serializeToJsonString(), true) : $reply;
    }

    /**
     * @param string $main
     * @param string $peer
     * @param string $type
     * @return bool
     * @throws Exception
     */
    public function updatePairType(string $main, string $peer, string $type): bool {
        if (!in_array($type, [PairType::BUSINESS, PairType::CONSULT])) {
            //此方法只支持商务和咨询类型的切换
            throw new Exception('PairType 不合法');
        }
        /**
         * @var Pair $pair
         */
        $pair = $this->getPairInfo($main, $peer, false, false);
        if ($pair->getOrigin() != $type) {
            //如果相同直接成功 不需要操作
            $attachment             = $pair->getAttachment() ? struct_to_array($pair->getAttachment()) : [];
            $attachment['relation'] = $type;
            $pair->setAttachment(array_to_struct($attachment))->setOrigin($type);
            [$reply, $status] = $this->pairSrvClient->UpdatePair($pair);
            if ($status != StatusCode::OK) {
                throw new Exception('PairSrv UpdatePair失败，原因：' . $reply);
            }
        }
        return true;
    }

    /**
     * @throws Exception
     */
    public function deletePair(string $main, string $peer): bool {
        $condition = (new PairID())->setMain($main)->setPeer($peer);
        [$reply, $status] = $this->pairSrvClient->DeletePair($condition);
        if ($status != StatusCode::OK) {
            throw new Exception('PairSrv DeletePair失败，原因：' . $reply);
        }
        return true;
    }

}