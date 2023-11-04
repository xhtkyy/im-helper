<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\v1;

/**
 * ESignSrv e签名宝服务
 */
class ESignSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * PSNCallback，个人实名认证成功回调
     * @param \Iam\v1\ESignPSNResult $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function PSNCallback(\Iam\v1\ESignPSNResult $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.ESignSrv/PSNCallback',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * PSNDetail，查询用户认证信息
     * @param \Iam\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function PSNDetail(\Iam\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.ESignSrv/PSNDetail',
        $argument,
        ['\Iam\v1\ESign', 'decode'],
        $metadata, $options);
    }

    /**
     * PSNAuth，用户认证
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function PSNAuth(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.ESignSrv/PSNAuth',
        $argument,
        ['\Iam\v1\ESignAuthData', 'decode'],
        $metadata, $options);
    }

}
