<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * IM会话成员服务
 */
class MemberSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {
    protected string $hostname = 'docker.for.mac.host.internal:8056';
    /**
     * CreateMember 创建会话
     * @param \Im\V1\MemberCreat $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateMember(\Im\V1\MemberCreat $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MemberSrv/CreateMember',
        $argument,
        ['\Im\V1\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * GetMember 查询成员
     * @param \Im\V1\MemberID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function GetMember(\Im\V1\MemberID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MemberSrv/GetMember',
        $argument,
        ['\Im\V1\Member', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateMember 编辑成员
     * @param \Im\V1\Member $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateMember(\Im\V1\Member $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MemberSrv/UpdateMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteMember 删除成员
     * @param \Im\V1\MemberID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function DeleteMember(\Im\V1\MemberID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MemberSrv/DeleteMember',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListMember 分页查询成员
     * @param \Im\V1\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListMember(\Im\V1\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.MemberSrv/ListMember',
        $argument,
        ['\Im\V1\RespArr', 'decode'],
        $metadata, $options);
    }

}
