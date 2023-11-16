<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * GuideSrv 引导服务
 */
class GuideSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * CreateGuid 获取引导状态
     * @param \Im\V1\GuidTyp $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
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
     * @return array
     */
    public function FinishGuide(\Im\V1\GuidTyp $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GuideSrv/FinishGuide',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
