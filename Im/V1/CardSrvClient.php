<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 */
class CardSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateCard 创建新的身份卡
     * @param \Im\V1\Card $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCard(\Im\V1\Card $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.CardSrv/CreateCard',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateCard 更新身份卡
     * @param \Im\V1\Card $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCard(\Im\V1\Card $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.CardSrv/UpdateCard',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateCardFields 更新身份卡字段
     * @param \Im\V1\CardFieldsReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCardFields(\Im\V1\CardFieldsReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.CardSrv/UpdateCardFields',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * QueryUserCards 查询身份卡ID列表查询身份卡列表
     * @param \Im\V1\IDs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryUserCards(\Im\V1\IDs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.CardSrv/QueryUserCards',
        $argument,
        ['\Im\V1\Cards', 'decode'],
        $metadata, $options);
    }

    /**
     * UserCards 查询自己身份卡列表
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UserCards(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.CardSrv/UserCards',
        $argument,
        ['\Im\V1\Cards', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteCard 删除身份卡，参数card_id(内外部身份卡ID以及个人openid，111，#222等)
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCard(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.CardSrv/DeleteCard',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
