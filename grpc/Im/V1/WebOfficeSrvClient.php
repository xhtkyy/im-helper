<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Im\V1;

/**
 */
class WebOfficeSrvClient extends \Xhtkyy\GrpcClient\AbstractClient {

    /**
     * CreateWebOffice 创建预览回调文件
     * @param \Im\V1\WebOffice $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
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
     * @return array
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
     * @return array
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
     * @return array
     */
    public function GetWebOfficePermission(\Im\V1\ID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/im.v1.WebOfficeSrv/GetWebOfficePermission',
        $argument,
        ['\Im\V1\CallBackWPSPermission', 'decode'],
        $metadata, $options);
    }

}
