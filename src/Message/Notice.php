<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Message;

use Hyperf\Grpc\StatusCode;
use Im\V1\NotifySrvClient;
use Im\V1\ThirdMessage;

class Notice
{
    public function __construct(
        protected NotifySrvClient $notifySrvClient
    )
    {
    }

    public function send(array $openids, string $content, string $typ = NoticeType::APP_NOTIFY): bool
    {
        [, $status] = $this->notifySrvClient->Send(
            (new ThirdMessage())->setNotify(true)->setUsers($openids)->setTyp($typ)->setContent($content)
        );
        return $status == StatusCode::OK;
    }
}