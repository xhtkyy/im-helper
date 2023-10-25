<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * 祝福语服务
 */
class BlessingWordsSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateBlessingWords 创建会议邀请
     * @param \Im\V1\BlessingWords $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateBlessingWords(\Im\V1\BlessingWords $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/CreateBlessingWords',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GetBlessingWords 祝福语详情
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetBlessingWords(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/GetBlessingWords',
        $argument,
        ['\Im\V1\BlessingWords', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteBlessingWords 删除祝福语
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteBlessingWords(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/DeleteBlessingWords',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * BlessingWordsSearch 祝福语列表
     * @param \Im\V1\BlessingWordsBatchReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BlessingWordsSearch(\Im\V1\BlessingWordsBatchReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/BlessingWordsSearch',
        $argument,
        ['\Im\V1\BlessingWordsBatch', 'decode'],
        $metadata, $options);
    }

}
