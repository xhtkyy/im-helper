<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\WebOffice;

use Hyperf\Grpc\StatusCode;
use Im\V1\WebOffice;
use Im\V1\WebOfficeID;
use Im\V1\WebOfficeSrvClient;

class WebOfficeServer
{
    public function __construct(
        protected WebOfficeSrvClient $webOfficeSrvClient
    )
    {
    }

    /**
     * 创建 返回文件id
     * @param string $name
     * @param string $url
     * @param int $size
     * @param string $creator
     * @return string
     * @throws \Exception
     */
    public function create(string $name, string $url, int $size, string $creator): string
    {
        /**
         * @var WebOfficeID|string $reply
         */
        [$reply, $status] = $this->webOfficeSrvClient->CreateWebOffice(
            (new WebOffice())
                ->setName($name)
                ->setUrl($url)
                ->setSize($size)
                ->setCreatorId($creator)
                ->setModifierId($creator)
                ->setCreateTime(time())
                ->setVersion(1)
        );
        if ($status != StatusCode::OK) {
            throw new \Exception("文件创建失败," . ($reply ?? ''));
        }
        return $reply->getFileId();
    }
}