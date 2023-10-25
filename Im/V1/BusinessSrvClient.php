<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 */
class BusinessSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * UserRelaLifted 用户关联关系解除
     * @param \Im\V1\RelaLiftedReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
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
     * @return \Grpc\UnaryCall
     */
    public function GroupFileSync(\Im\V1\FileSyncReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/GroupFileSync',
        $argument,
        ['\Im\V1\FileSyncFileRes', 'decode'],
        $metadata, $options);
    }

    /**
     * GroupFileSyncCancel 群文件同步撤回
     * @param \Im\V1\FileSyncFileRes $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GroupFileSyncCancel(\Im\V1\FileSyncFileRes $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/GroupFileSyncCancel',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GlobalMergSearch 全局聚合搜索
     * @param \Im\V1\MergQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GlobalMergSearch(\Im\V1\MergQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BusinessSrv/GlobalMergSearch',
        $argument,
        ['\Im\V1\MergQueryResp', 'decode'],
        $metadata, $options);
    }

}
