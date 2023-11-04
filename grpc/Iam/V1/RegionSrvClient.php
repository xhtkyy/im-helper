<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\v1;

/**
 * 行政区划服务（区域划分）
 */
class RegionSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * CreateRegion 批量创建行政区划
     * @param \Iam\v1\Regions $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateRegion(\Iam\v1\Regions $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.RegionSrv/CreateRegion',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListRegion 查询所有支持区号
     * @param \Iam\v1\QueryRegions $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListRegion(\Iam\v1\QueryRegions $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.RegionSrv/ListRegion',
        $argument,
        ['\Iam\v1\Regions', 'decode'],
        $metadata, $options);
    }

}
