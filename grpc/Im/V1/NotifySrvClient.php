<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 * 通知&消息相关服务
 */
class NotifySrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * Send 发送消息
     * @param \Im\V1\ThirdMessage $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Send(\Im\V1\ThirdMessage $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.NotifySrv/Send',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateNotify 编辑通知配置，不存在就创建
     * @param \Im\V1\Notify $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateNotify(\Im\V1\Notify $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.NotifySrv/UpdateNotify',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * ListNotify 分页查询通知
     * @param \Im\V1\Pagination $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function ListNotify(\Im\V1\Pagination $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.NotifySrv/ListNotify',
        $argument,
        ['\Im\V1\RespArr', 'decode'],
        $metadata, $options);
    }

}
