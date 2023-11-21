<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * 祝福语服务
 */
class BlessingWordsSrvClient extends \Xhtkyy\GrpcClient\AbstractClient {

    /**
     * CreateBlessingWords 创建会议邀请
     * @param \Im\V1\BlessingWords $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
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
     * @return array
     */
    public function GetBlessingWords(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/GetBlessingWords',
        $argument,
        ['\Im\V1\BlessingWords', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateBlessingWords 祝福语更新
     * @param \Im\V1\BlessingWords $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateBlessingWords(\Im\V1\BlessingWords $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/UpdateBlessingWords',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteBlessingWords 删除祝福语
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
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
     * @return array
     */
    public function BlessingWordsSearch(\Im\V1\BlessingWordsBatchReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.BlessingWordsSrv/BlessingWordsSearch',
        $argument,
        ['\Im\V1\BlessingWordsBatch', 'decode'],
        $metadata, $options);
    }

}
