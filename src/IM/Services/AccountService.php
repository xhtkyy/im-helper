<?php

namespace Xhtkyy\ImHelper\IM\Services;

use Exception;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Grpc\StatusCode;
use Iam\V1\ProfileSchema;
use Iam\V1\ProfilesClient;
use Iam\V1\QueryID;
use Im\V1\Pair;
use Im\V1\PairSrvClient;
use Xhtkyy\ImHelper\Exception\GroupNotFoundException;
use Xhtkyy\ImHelper\IM\Interface\AccountInterface;
use Xhtkyy\ImHelper\IM\Interface\PairInterface;
use Xhtkyy\ImHelper\IM\properties\pair\PairProperty;

class AccountService implements AccountInterface {
    #[Inject]
    protected ProfilesClient $profilesClient;

    /**
     * @throws GroupNotFoundException
     * @throws Exception
     */
    public function who($openID): array {
        /**
         * @var ProfileSchema $reply
         */
        [$reply, $status] = $this->profilesClient->Who((new QueryID())->setId($openID));
        if ($status != StatusCode::OK) {
            throw new Exception('调用Profiles Who失败.');
        }
        return json_decode($reply->serializeToJsonString(), true);
    }
}