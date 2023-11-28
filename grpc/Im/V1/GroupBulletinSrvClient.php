<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * GroupBulletinSrv 群公告
 */
class GroupBulletinSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * GetGroupBulletin 查询公告详情
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetGroupBulletin(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupBulletinSrv/GetGroupBulletin',
        $argument,
        ['\Im\V1\GroupBulletin', 'decode'],
        $metadata, $options);
    }

    /**
     * CreateGroupBulletin 创建群公告
     * @param \Im\V1\GroupBulletin $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateGroupBulletin(\Im\V1\GroupBulletin $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupBulletinSrv/CreateGroupBulletin',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteGroupBulletin 删除公告
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function DeleteGroupBulletin(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupBulletinSrv/DeleteGroupBulletin',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GroupBulletinPin
     * @param \Im\V1\GroupBulletinPinReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GroupBulletinPin(\Im\V1\GroupBulletinPinReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupBulletinSrv/GroupBulletinPin',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GroupBulletinSearch 公告列表
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GroupBulletinSearch(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupBulletinSrv/GroupBulletinSearch',
        $argument,
        ['\Im\V1\GroupBulletins', 'decode'],
        $metadata, $options);
    }

}
