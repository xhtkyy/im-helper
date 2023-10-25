<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * 会议邀请服务
 */
class MeetingInviteSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateMeetings 批量创建会议邀请
     * @param \Im\V1\MeetingInviteBatch $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateMeetingInvites(\Im\V1\MeetingInviteBatch $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingInviteSrv/CreateMeetingInvites',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * MeetingInviteSearch 查询会议邀请列表
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MeetingInviteSearch(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingInviteSrv/MeetingInviteSearch',
        $argument,
        ['\Im\V1\MeetingInviteBatch', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteMeetingInvite 删除邀请
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteMeetingInvite(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MeetingInviteSrv/DeleteMeetingInvite',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
