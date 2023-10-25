<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 */
class WebOfficeSrvClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateWebOffice 创建预览回调文件
     * @param \Im\V1\WebOffice $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateWebOffice(\Im\V1\WebOffice $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.WebOfficeSrv/CreateWebOffice',
        $argument,
        ['\Im\V1\WebOfficeID', 'decode'],
        $metadata, $options);
    }

    /**
     * GetWebOffice 金山回调，查询文件信息
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWebOffice(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.WebOfficeSrv/GetWebOffice',
        $argument,
        ['\Im\V1\CallBackWPSFile', 'decode'],
        $metadata, $options);
    }

    /**
     * GetWebOffice 金山回调，查询文件地址
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWebOfficeURL(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.WebOfficeSrv/GetWebOfficeURL',
        $argument,
        ['\Im\V1\CallBackWPSFile', 'decode'],
        $metadata, $options);
    }

    /**
     * GetWebOfficePermission 金山回调，查询文件权限
     * @param \Im\V1\ID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetWebOfficePermission(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.WebOfficeSrv/GetWebOfficePermission',
        $argument,
        ['\Im\V1\CallBackWPSPermission', 'decode'],
        $metadata, $options);
    }

}
