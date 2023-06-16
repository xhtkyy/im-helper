<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Message;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Grpc\StatusCode;
use Im\V1\Header;
use Im\V1\NotifySrvClient;
use Im\V1\RCNotify;
use Im\V1\ThirdMessage;

class Notice
{
    public function __construct(
        protected NotifySrvClient       $notifySrvClient,
        protected StdoutLoggerInterface $stdoutLogger
    )
    {
    }

    /**
     * @param array $openids 接收者
     * @param string $content 内容
     * @param int $scene 场景值
     * @param string $typ 类型
     * @param string $from 来源用户
     * @return bool
     */
    public function send(array $openids, string $content, int $scene, string $typ = NoticeType::APP_NOTIFY, string $from = ''): bool
    {
        [, $status] = $this->notifySrvClient->Send(
            (new ThirdMessage())->setNotify(true)->setSender($from)->setUsers($openids)->setContent(
                (new RCNotify())->setType($typ)->setScene($scene)->setContent($content)
            )
        );
        $this->stdoutLogger->debug("Template Msg", compact("openids", "content", "scene", "typ", "from"));
        return $status == StatusCode::OK;
    }
}