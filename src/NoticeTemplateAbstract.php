<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper;

use Xhtkyy\ImHelper\Exception\ClassNotFoundException;
use Xhtkyy\ImHelper\Exception\ConstantNotFoundException;
use Xhtkyy\ImHelper\Exception\TemplateNotFoundException;
use Xhtkyy\ImHelper\Message\NoticeType;
use Xhtkyy\ImHelper\Template\src\Normal;
use Xhtkyy\ImHelper\Template\TemplateInterface;

/**
 * @method TemplateInterface byScene(...$arguments)
 */
abstract class NoticeTemplateAbstract
{
    protected string $template = Normal::class;
    protected string $typ = NoticeType::APP_NOTIFY;

    protected string $scene_class = "";

    protected array $pool = [];

    protected array $scene = [];

    protected array $config = [];

    /**
     * @param string $template
     * @return TemplateInterface
     * @throws TemplateNotFoundException
     */
    public function initTemplate(string $template): TemplateInterface
    {
        if (!class_exists($template)) {
            throw new TemplateNotFoundException();
        }
        if (!isset($this->pool[$template])) {
            $this->pool[$template] = new $template;
        }
        return $this->pool[$template];
    }

    /**
     * 获取场景值
     * @param string $constant
     * @return int
     * @throws ClassNotFoundException
     * @throws ConstantNotFoundException
     */
    public function getScene(string $constant): int
    {
        $scenes = $this->getSceneArr();
        if (!isset($scenes[$constant])) {
            throw new ConstantNotFoundException("通知消息枚举值{$constant}未找到");
        }
        return (int)$scenes[$constant];
    }

    /**
     * @return array
     * @throws ClassNotFoundException
     */
    public function getSceneArr(): array
    {
        if (!isset($this->scene[$this->scene_class])) {
            if (!class_exists($this->scene_class)) {
                throw new ClassNotFoundException();
            }
            $this->scene[$this->scene_class] = (new \ReflectionClass($this->scene_class))->getConstants();
        }
        return $this->scene[$this->scene_class];
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return TemplateInterface
     * @throws ClassNotFoundException
     * @throws ConstantNotFoundException
     * @throws TemplateNotFoundException
     */
    public function __call(string $name, array $arguments): TemplateInterface
    {
        //兼容多个
        if ($name == "byScene") {
            $flipScenes = array_flip($this->getSceneArr());
            $name = $flipScenes[$arguments[0] ?? ''] ?? '';
            unset($arguments[0]);
        }
        //获取场景值
        $scene = $this->getScene(strtoupper($name));
        //设置
        $config = $this->config[$scene] ?? [];
        //支持string
        if (is_string($this->config[$scene])) {
            $config = ['title' => $this->config[$scene]];
        }

        //初始化模板
        $template = $this->initTemplate($config['template'] ?? $this->template);

        $template->setConfig($config)
            ->setType($this->typ)
            ->setScene($scene)
            ->setTemplate(strtolower(class_basename($template)))
            ->setTitle(sprintf($config['title'] ?? "%s", ...$arguments));
        return $template;
    }
}