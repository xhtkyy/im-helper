<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * IM群组服务
 */
class GroupSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * CreateGroup 创建群组
     * @param \Im\V1\GroupCreat $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateGroup(\Im\V1\GroupCreat $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/CreateGroup',
        $argument,
        ['\Im\V1\Group', 'decode'],
        $metadata, $options);
    }

    /**
     * GetGroup 查询群组
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetGroup(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/GetGroup',
        $argument,
        ['\Im\V1\Group', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateGroup 编辑群组
     * @param \Im\V1\Group $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateGroup(\Im\V1\Group $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/UpdateGroup',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteGroup 删除群组
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function DeleteGroup(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/DeleteGroup',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListGroup 分页查询群组
     * @param \Im\V1\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListGroup(\Im\V1\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/ListGroup',
        $argument,
        ['\Im\V1\RespArr', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateGroupActive 更新活跃时间
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateGroupActive(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/UpdateGroupActive',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * GroupDetailWithCards 个人在群的详情
     * @param \Im\V1\GroupDetailQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GroupDetailWithCards(\Im\V1\GroupDetailQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/GroupDetailWithCards',
        $argument,
        ['\Im\V1\Group', 'decode'],
        $metadata, $options);
    }

    /**
     * CreateGroupBatch 批量创建群
     * @param \Im\V1\GroupCreateBatch $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateGroupBatch(\Im\V1\GroupCreateBatch $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/CreateGroupBatch',
        $argument,
        ['\Im\V1\GroupCreateBatch', 'decode'],
        $metadata, $options);
    }

    /**
     * TransferGroup 群转让
     * @param \Im\V1\GroupTransfer $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function TransferGroup(\Im\V1\GroupTransfer $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/TransferGroup',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * CloseGroupFileSync 关闭群文件同步
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CloseGroupFileSync(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/CloseGroupFileSync',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ExitTeamGroups 用户退出内部群
     * @param \Im\V1\ExitTeamGroupsReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ExitTeamGroups(\Im\V1\ExitTeamGroupsReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/ExitTeamGroups',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * QueryGroupCardIDDetail 查询群和身份卡详情
     * @param \Im\V1\GroupCardIDDetailQuery $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function QueryGroupCardIDDetail(\Im\V1\GroupCardIDDetailQuery $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/QueryGroupCardIDDetail',
        $argument,
        ['\Im\V1\Group', 'decode'],
        $metadata, $options);
    }

    /**
     * CreateGeoGroup 发起面对面建群
     * @param \Im\V1\GeoGroupJoinReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateGeoGroup(\Im\V1\GeoGroupJoinReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/CreateGeoGroup',
        $argument,
        ['\Im\V1\GeoGroupJoinWaits', 'decode'],
        $metadata, $options);
    }

    /**
     * ListGeoGroupWaits 面对面建群记录列表
     * @param \Im\V1\GeoGroupJoinReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListGeoGroupWaits(\Im\V1\GeoGroupJoinReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/ListGeoGroupWaits',
        $argument,
        ['\Im\V1\GeoGroupJoinWaits', 'decode'],
        $metadata, $options);
    }

    /**
     * ExitGeoGroupWait 面对面建群，退出
     * @param \Im\V1\GeoGroupJoinReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ExitGeoGroupWait(\Im\V1\GeoGroupJoinReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/ExitGeoGroupWait',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * JoinGeoGroup 面对面建群，进群
     * @param \Im\V1\GeoGroupJoinReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function JoinGeoGroup(\Im\V1\GeoGroupJoinReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/JoinGeoGroup',
        $argument,
        ['\Im\V1\ID', 'decode'],
        $metadata, $options);
    }

    /**
     * UserFileHelperCreate 用户初始化，文件助手
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UserFileHelperCreate(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.GroupSrv/UserFileHelperCreate',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
