<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Message;

class NoticeType {
    /**
     * APP_KNOW // 知行提醒
     * APP_SQUARE // 广场提醒
     * APP_NOTIFY // 全部提醒
     * APP_CLOUD_DISK // 云盘提醒
     * APP_APPROVAL // 审批提醒
     */

    const APP_NOTIFY = "APP_NOTIFY";
    const APP_KNOW = "APP_KNOW";
    const APP_SQUARE = "APP_SQUARE";
    const APP_CLOUD_DISK = "APP_CLOUD_DISK";
    const APP_APPROVAL = "APP_APPROVAL"; //审批
    const APP_ADDRESS_BOOK = "APP_ADDRESS_BOOK"; //通讯录
    const APP_TEAMS = "APP_TEAMS"; //组织
    const APP_BUSINESS = "APP_BUSINESS"; //商务（业务）关系
    const APP_SECRETARY = "APP_SECRETARY";//小秘书
    const APP_WORKS = "APP_WORKS"; //工作通知
    const APP_NICHE = "APP_NICHE"; //商机管理
    const APP_PARTNER = "APP_PARTNER"; //另可联盟
    const APP_SERVE = "APP_SERVE"; //服务应用通知
}
