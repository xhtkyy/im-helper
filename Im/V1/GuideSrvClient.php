<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * GuideSrv 引导服务
 */
class GuideSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateGuid 获取引导状态
     * @param \Im\V1\GuidTyp $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGuide(\Im\V1\GuidTyp $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GuideSrv/GetGuide',
        $argument,
        ['\Im\V1\Guide', 'decode'],
        $metadata, $options);
    }

    /**
     * FinishGuid 完成引导
     * @param \Im\V1\GuidTyp $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FinishGuide(\Im\V1\GuidTyp $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GuideSrv/FinishGuide',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
