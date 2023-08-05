<?php

namespace Xhtkyy\ImHelper\IM\Interface;

use Xhtkyy\ImHelper\IM\properties\DepartmentProperty;
use Xhtkyy\ImHelper\IM\properties\GroupProperty;
use Xhtkyy\ImHelper\IM\properties\MemberProperty;

/**
 * 群相关的抽象接口
 */
interface GroupInterface {

    /**
     * 调用建群服务创建部门群会话
     * @param DepartmentProperty $department 部门信息
     * @param array $rids 融云ID集合
     * @param array $members 部门下员工数据集合
     * @param bool $isAllStaff 是否是全员群 默认是false
     * @return string
     */
    public function create(DepartmentProperty $department, array $rids, array $members, bool $isAllStaff = false): string;

    /**
     * 删除部门群 当部门不存在群
     * @param string $imGroup 群标识
     * @return bool
     */
    public function delete(string $imGroup): bool;

    /**
     * 添加/编辑群成员
     * @param MemberProperty $member 用户信息
     * @param bool $isAdd 是否添加 默认为true
     * @return bool
     */
    public function modifyGroupMember(MemberProperty $member, bool $isAdd = true): bool;


    /**
     * 删除群成员
     * @param MemberProperty $member 用户信息
     * @return bool
     */
    public function deleteGroupMember(MemberProperty $member): bool;

    /**
     * 修改群信息
     * @param GroupProperty $group 群信息
     * @return bool
     */
    public function updateGroup(GroupProperty $group): bool;

    /**
     * 获取群的具体详情
     * @param string $imGroup 群标识
     * @return array
     */
    public function getGroupInfo(string $imGroup): array;

    /**
     * 获取群成员列表
     * @param string $imGroup 群标识
     * @param int $index 默认为 0
     * @param int $size 因存在获取全部的情况默认就给10000吧
     * @return array
     */
    public function getGroupMembers(string $imGroup, int $index = 0, int $size = 10000): array;

    /**
     * 修改群主 （新增服务，按IM调整增加）
     * @param string $imGroup
     * @param string $oldOwner
     * @param string $newOwner
     * @return bool
     */
    public function transferGroup(string $imGroup,string $oldOwner,string $newOwner) : bool;
}