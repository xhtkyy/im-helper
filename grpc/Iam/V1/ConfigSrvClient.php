<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 */
class ConfigSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * GetConfig 获取配置
     * @param \Iam\V1\QueryConfig $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetConfig(\Iam\V1\QueryConfig $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.ConfigSrv/GetConfig',
        $argument,
        ['\Iam\V1\ConfigSchema', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateConfig 更新配置
     * @param \Iam\V1\ConfigSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateConfig(\Iam\V1\ConfigSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.ConfigSrv/UpdateConfig',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GetPopularizeSMSTemplateConfig 获取短信推广模版配置
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetPopularizeSMSTemplateConfig(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.ConfigSrv/GetPopularizeSMSTemplateConfig',
        $argument,
        ['\Iam\V1\TextResp', 'decode'],
        $metadata, $options);
    }

}
