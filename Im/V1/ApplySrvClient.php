<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * 申请相关服务
 */
class ApplySrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateApply 创建申请
     * @param \Im\V1\Apply $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateApply(\Im\V1\Apply $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ApplySrv/CreateApply',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GetApply 查询申请
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetApply(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ApplySrv/GetApply',
        $argument,
        ['\Im\V1\Apply', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateApply 编辑申请
     * @param \Im\V1\Apply $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateApply(\Im\V1\Apply $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ApplySrv/UpdateApply',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateApplyStatus 编辑申请
     * @param \Im\V1\StatusReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateApplyStatus(\Im\V1\StatusReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ApplySrv/UpdateApplyStatus',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListApplies 分页查询申请
     * @param \Im\V1\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListApplies(\Im\V1\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ApplySrv/ListApplies',
        $argument,
        ['\Im\V1\RespArr', 'decode'],
        $metadata, $options);
    }

}
