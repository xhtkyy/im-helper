<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 */
class TencentSrvClient extends \Xhtkyy\GrpcClient\AbstractClient {

    /**
     * VoiceTextResult 语音转文本结果
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function VoiceTextResult(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.TencentSrv/VoiceTextResult',
        $argument,
        ['\Im\V1\TextResult', 'decode'],
        $metadata, $options);
    }

    /**
     * Voice2Text 语音转文本
     * @param \Im\V1\VoiceText $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Voice2Text(\Im\V1\VoiceText $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.TencentSrv/Voice2Text',
        $argument,
        ['\Im\V1\ID', 'decode'],
        $metadata, $options);
    }

    /**
     * Voice2Text 语音转文本回调
     * @param \Im\V1\TextCallback $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Voice2TextCallback(\Im\V1\TextCallback $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.TencentSrv/Voice2TextCallback',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
