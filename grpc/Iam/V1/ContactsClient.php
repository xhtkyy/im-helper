<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 * 联系人服务
 */
class ContactsClient extends \Xhtkyy\GrpcClient\AbstractClient {

    /**
     * 发起添加联系人请求，或者确认别人发起的联系人请求
     * @param \Iam\V1\Contact\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Request(\Iam\V1\Contact\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Contacts/Request',
        $argument,
        ['\Iam\V1\Acked', 'decode'],
        $metadata, $options);
    }

    /**
     * 删除指定的联系人
     * @param \Iam\V1\LocalID\PBList $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Remove(\Iam\V1\LocalID\PBList $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Contacts/Remove',
        $argument,
        ['\Iam\V1\Acked', 'decode'],
        $metadata, $options);
    }

    /**
     * 修改备注
     * @param \Iam\V1\Contact\ExtInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Patch(\Iam\V1\Contact\ExtInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Contacts/Patch',
        $argument,
        ['\Iam\V1\Acked', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Iam\V1\LocalID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Details(\Iam\V1\LocalID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Contacts/Details',
        $argument,
        ['\Iam\V1\Contact', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Iam\V1\Query $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function List(\Iam\V1\Query $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Contacts/List',
        $argument,
        ['\Iam\V1\Contact\PBList', 'decode'],
        $metadata, $options);
    }

}
