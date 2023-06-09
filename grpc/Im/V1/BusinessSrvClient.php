<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 */
class BusinessSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * UserRelaLifted 用户关联关系解除
     * @param \Im\V1\RelaLiftedReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UserRelaLifted(\Im\V1\RelaLiftedReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/UserRelaLifted',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * UserRelaTransfer 用户关联关系转移
     * @param \Im\V1\RelaTransferReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UserRelaTransfer(\Im\V1\RelaTransferReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/UserRelaTransfer',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * NotifyMark 通知已读
     * @param \Im\V1\NotifyIDs $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function NotifyMark(\Im\V1\NotifyIDs $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/NotifyMark',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * NotifyCount 通知统计
     * @param \Im\V1\NotifyCountReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function NotifyCount(\Im\V1\NotifyCountReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/NotifyCount',
        $argument,
        ['\Im\V1\NotifyCountResp', 'decode'],
        $metadata, $options);
    }

    /**
     * GroupFileSync 群文件同步
     * @param \Im\V1\FileSyncReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GroupFileSync(\Im\V1\FileSyncReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/GroupFileSync',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
