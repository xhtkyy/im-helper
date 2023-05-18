<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * IM群组服务
 */
class GroupSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {
//    protected string $hostname = 'docker.for.mac.host.internal:8056';
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

}
