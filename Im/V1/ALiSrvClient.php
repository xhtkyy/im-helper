<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * ALiSrv 阿里相关服务
 */
class ALiSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * VoiceTextResult 语音转文本结果
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VoiceTextResult(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ALiSrv/VoiceTextResult',
        $argument,
        ['\Im\V1\TextResult', 'decode'],
        $metadata, $options);
    }

    /**
     * Voice2Text 语音转文本
     * @param \Im\V1\VoiceText $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Voice2Text(\Im\V1\VoiceText $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ALiSrv/Voice2Text',
        $argument,
        ['\Im\V1\ID', 'decode'],
        $metadata, $options);
    }

    /**
     * Voice2Text 语音转文本回调
     * @param \Im\V1\ALiVoiceCallback $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Voice2TextCallback(\Im\V1\ALiVoiceCallback $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.ALiSrv/Voice2TextCallback',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
