<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * IM关系服务
 */
class PairSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreatePair 创建关系
     * @param \Im\V1\Pair $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePair(\Im\V1\Pair $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/CreatePair',
        $argument,
        ['\Im\V1\Pair', 'decode'],
        $metadata, $options);
    }

    /**
     * GetPair 查询关系
     * @param \Im\V1\PairID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPair(\Im\V1\PairID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/GetPair',
        $argument,
        ['\Im\V1\Pair', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdatePair 编辑关系
     * @param \Im\V1\Pair $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePair(\Im\V1\Pair $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/UpdatePair',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeletePair 删除关系
     * @param \Im\V1\PairID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePair(\Im\V1\PairID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/DeletePair',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPair 分页查询关系
     * @param \Im\V1\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPair(\Im\V1\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/ListPair',
        $argument,
        ['\Im\V1\RespArr', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdatePairActive 更新活跃时间
     * @param \Im\V1\PairID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePairActive(\Im\V1\PairID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/UpdatePairActive',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * PairCreatedCheck 已创建关系检查
     * @param \Im\V1\PairRelaStatusQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PairCreatedCheck(\Im\V1\PairRelaStatusQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.PairSrv/PairCreatedCheck',
        $argument,
        ['\Im\V1\PairRelaStatus', 'decode'],
        $metadata, $options);
    }

}
