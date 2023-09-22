<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 * 主域管理服务
 */
class HostsClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * 注册
     * @param \Iam\V1\HostSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Register(\Iam\V1\HostSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Hosts/Register',
        $argument,
        ['\Iam\V1\Acked', 'decode'],
        $metadata, $options);
    }

    /**
     * 更新
     * @param \Iam\V1\HostSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Update(\Iam\V1\HostSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Hosts/Update',
        $argument,
        ['\Iam\V1\Acked', 'decode'],
        $metadata, $options);
    }

    /**
     * 移除
     * @param \Iam\V1\HostSchema\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Remove(\Iam\V1\HostSchema\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Hosts/Remove',
        $argument,
        ['\Iam\V1\Acked', 'decode'],
        $metadata, $options);
    }

    /**
     * 列出
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function List(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Hosts/List',
        $argument,
        ['\Iam\V1\Manifests', 'decode'],
        $metadata, $options);
    }

}
