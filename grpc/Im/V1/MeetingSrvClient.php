<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * 会议相关服务
 */
class MeetingSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * CreateMeeting 创建会议
     * @param \Im\V1\Meeting $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateMeeting(\Im\V1\Meeting $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingSrv/CreateMeeting',
        $argument,
        ['\Im\V1\ID', 'decode'],
        $metadata, $options);
    }

    /**
     * GetMeeting 查询会议
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetMeeting(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingSrv/GetMeeting',
        $argument,
        ['\Im\V1\Meeting', 'decode'],
        $metadata, $options);
    }

    /**
     * RCVoiceStream 融云会议录制结果查询
     * @param \Im\V1\QueryVoiceStreamRecord $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function RCVoiceStream(\Im\V1\QueryVoiceStreamRecord $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingSrv/RCVoiceStream',
        $argument,
        ['\Im\V1\MeetingRecord', 'decode'],
        $metadata, $options);
    }

    /**
     * RCVoiceStreamRecord 融云会议录制
     * @param \Im\V1\VoiceStreamRecordReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function RCVoiceStreamRecord(\Im\V1\VoiceStreamRecordReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingSrv/RCVoiceStreamRecord',
        $argument,
        ['\Im\V1\VoiceStreamRecordResp', 'decode'],
        $metadata, $options);
    }

    /**
     * RCVoiceStreamRecordCallback 融云录音回调
     * @param \Im\V1\VoiceStreamRecordCallback $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function RCVoiceStreamRecordCallback(\Im\V1\VoiceStreamRecordCallback $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingSrv/RCVoiceStreamRecordCallback',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * RCVoiceStreamStatusCallback 融云会议状态回调
     * @param \Im\V1\VoiceStreamStatusCallback $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function RCVoiceStreamStatusCallback(\Im\V1\VoiceStreamStatusCallback $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingSrv/RCVoiceStreamStatusCallback',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
