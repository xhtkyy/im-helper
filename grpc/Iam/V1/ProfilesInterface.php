<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/Unit.proto

namespace Iam\V1;

/**
 * 用户档案服务
 *
 * Protobuf type <code>iam.v1.Profiles</code>
 */
interface ProfilesInterface
{
    /**
     * 获取当前账号的个人档案，此处的 ID 为不含前缀与属地的裸 ID
     *
     * Method <code>me</code>
     *
     * @param \Google\Protobuf\GPBEmpty $request
     * @return \Iam\V1\ProfileSchema
     */
    public function me(\Google\Protobuf\GPBEmpty $request);

    /**
     * 获取指定账号个人档案，此处的 ID 为不含前缀与属地的裸 ID
     *
     * Method <code>who</code>
     *
     * @param \Iam\V1\QueryID $request
     * @return \Iam\V1\ProfileSchema
     */
    public function who(\Iam\V1\QueryID $request);

    /**
     * 更新个人档案
     *
     * Method <code>updateProfile</code>
     *
     * @param \Iam\V1\ProfileSchema $request
     * @return \Google\Protobuf\GPBEmpty
     */
    public function updateProfile(\Iam\V1\ProfileSchema $request);

    /**
     * 手机号/另可ID查询个人详情
     *
     * Method <code>searchProfile</code>
     *
     * @param \Iam\V1\QueryProfile $request
     * @return \Iam\V1\ProfileSchema
     */
    public function searchProfile(\Iam\V1\QueryProfile $request);

    /**
     * QueryProfiles 批量身份卡查询
     *
     * Method <code>queryProfiles</code>
     *
     * @param \Iam\V1\BatchQueryProfile $request
     * @return \Iam\V1\BatchQueryProfileResp
     */
    public function queryProfiles(\Iam\V1\BatchQueryProfile $request);

}

