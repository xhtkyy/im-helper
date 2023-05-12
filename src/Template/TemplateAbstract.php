<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Template;

use Xhtkyy\ImHelper\Message\Notice;
use Xhtkyy\ImHelper\Message\NoticeType;

abstract class TemplateAbstract implements TemplateInterface
{
    protected Notice $notice;
    protected string $template; //模板

    protected string $type = NoticeType::APP_NOTIFY; //通知类型
    protected int $scene; //场景值
    protected array $header = []; //头部信息
    protected array $content = []; //内容 包含 title,body
    protected array $extend = []; //扩展参数
    protected array $config = []; //配置

    public function __construct()
    {
        $this->notice = di(Notice::class);
    }


    public function setConfig(array $config): self
    {
        $this->config = $config;
        return $this;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * 设置场景
     * @param int $scene
     * @return TemplateInterface
     */
    public function setScene(int $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    public function setTemplate(string $class): self
    {
        $this->template = $class;
        return $this;
    }

    public function setHeaders(array $param): self
    {
        $this->header = array_merge($this->header, $param);
        return $this;
    }


    public function setExtend(array $data): self
    {
        $this->extend = array_merge($this->extend, $data);
        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->content = array_merge($this->content, [
            "title" => $title
        ]);
        return $this;
    }

    public function setBody(array $body): TemplateInterface
    {
        $temp = [];
        if (is_array(reset($body))) {
            foreach ($body as $item) {
                $temp[] = ["key" => current($item) ?? '', "value" => next($item) ?? ''];
            }
        } else {
            !is_array($body) && $body = [$body];
            foreach ($body as $key => $value) {
                $temp[] = compact('key', 'value');
            }
        }
        $this->content = array_merge($this->content, ['body' => $temp]);
        return $this;
    }

    public function getContent(): array
    {
        return $this->content;
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }

    public function toArray(): array
    {
        return [
            "template" => $this->template,
            "type" => $this->type,
            "scene" => $this->scene,
            "header" => $this->header,
            "content" => [
                'title' => $this->content['title'],
                'body' => $this->content['body'] ?? []
            ],
            "extend" => $this->extend,
        ];
    }

    public function send(array $openids): bool
    {
        return $this->notice->send($openids, $this->toJson(), $this->type);
    }
}