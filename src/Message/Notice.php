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

    public function send(int $typ, array $openids, string $content): bool
    {
        [, $status] = $this->notifySrvClient->Send(
            (new ThirdMessage())->setUsers($openids)->setTyp($typ)->setContent($content)
        );
        return $status == StatusCode::OK;
    }
}