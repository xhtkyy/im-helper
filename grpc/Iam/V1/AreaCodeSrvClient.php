<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 * 区号服务（手机国际区号）
 */
class AreaCodeSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * CreateAreaCode 创建区域代码
     * @param \Iam\V1\AreaCodeSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateAreaCode(\Iam\V1\AreaCodeSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.AreaCodeSrv/CreateAreaCode',
        $argument,
        ['\Iam\V1\AreaCodeSchema', 'decode'],
        $metadata, $options);
    }

    /**
     * GetGroup 查询区号
     * @param \Iam\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetAreaCode(\Iam\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.AreaCodeSrv/GetAreaCode',
        $argument,
        ['\Iam\V1\AreaCodeSchema', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateAreaCode 编辑区号
     * @param \Iam\V1\AreaCodeSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateAreaCode(\Iam\V1\AreaCodeSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.AreaCodeSrv/UpdateAreaCode',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteAreaCode 删除区号
     * @param \Iam\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function DeleteAreaCode(\Iam\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.AreaCodeSrv/DeleteAreaCode',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAreaCode 查询所有支持区号
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListAreaCode(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.AreaCodeSrv/ListAreaCode',
        $argument,
        ['\Iam\V1\RespAreaCodes', 'decode'],
        $metadata, $options);
    }

}
