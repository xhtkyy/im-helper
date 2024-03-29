<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

/**
 * 区号服务（手机国际区号）
 *
 * Protobuf type <code>iam.v1.AreaCodeSrv</code>
 */
interface AreaCodeSrvInterface
{
    /**
     * CreateAreaCode 创建区域代码
     *
     * Method <code>createAreaCode</code>
     *
     * @param \Iam\V1\AreaCodeSchema $request
     * @return \Iam\V1\AreaCodeSchema
     */
    public function createAreaCode(\Iam\V1\AreaCodeSchema $request);

    /**
     * GetGroup 查询区号
     *
     * Method <code>getAreaCode</code>
     *
     * @param \Iam\V1\ID $request
     * @return \Iam\V1\AreaCodeSchema
     */
    public function getAreaCode(\Iam\V1\ID $request);

    /**
     * UpdateAreaCode 编辑区号
     *
     * Method <code>updateAreaCode</code>
     *
     * @param \Iam\V1\AreaCodeSchema $request
     * @return \Google\Protobuf\GPBEmpty
     */
    public function updateAreaCode(\Iam\V1\AreaCodeSchema $request);

    /**
     * DeleteAreaCode 删除区号
     *
     * Method <code>deleteAreaCode</code>
     *
     * @param \Iam\V1\ID $request
     * @return \Google\Protobuf\GPBEmpty
     */
    public function deleteAreaCode(\Iam\V1\ID $request);

    /**
     * ListAreaCode 查询所有支持区号
     *
     * Method <code>listAreaCode</code>
     *
     * @param \Google\Protobuf\GPBEmpty $request
     * @return \Iam\V1\RespAreaCodes
     */
    public function listAreaCode(\Google\Protobuf\GPBEmpty $request);

}

