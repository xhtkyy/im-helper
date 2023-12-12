<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 * 用户档案服务
 */
class ProfilesClient extends \Xhtkyy\GrpcClient\AbstractClient {

    /**
     * 获取当前账号的个人档案，此处的 ID 为不含前缀与属地的裸 ID
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Me(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Profiles/Me',
        $argument,
        ['\Iam\V1\ProfileSchema', 'decode'],
        $metadata, $options);
    }

    /**
     * 获取指定账号个人档案，此处的 ID 为不含前缀与属地的裸 ID
     * @param \Iam\V1\QueryID $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function Who(\Iam\V1\QueryID $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Profiles/Who',
        $argument,
        ['\Iam\V1\ProfileSchema', 'decode'],
        $metadata, $options);
    }

    /**
     * 更新个人档案
     * @param \Iam\V1\ProfileSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function UpdateProfile(\Iam\V1\ProfileSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Profiles/UpdateProfile',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * 手机号/另可ID查询个人详情
     * @param \Iam\V1\QueryProfile $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function SearchProfile(\Iam\V1\QueryProfile $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Profiles/SearchProfile',
        $argument,
        ['\Iam\V1\ProfileSchema', 'decode'],
        $metadata, $options);
    }

    /**
     * QueryProfiles 批量身份卡查询
     * @param \Iam\V1\BatchQueryProfile $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function QueryProfiles(\Iam\V1\BatchQueryProfile $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.Profiles/QueryProfiles',
        $argument,
        ['\Iam\V1\BatchQueryProfileResp', 'decode'],
        $metadata, $options);
    }

}
