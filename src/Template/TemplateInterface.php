<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Template;

interface TemplateInterface
{
    public function setConfig(array $config): self;
    public function getConfig(): array;
    public function setType(string $type): self;
    public function setScene(int $scene): self;
    public function setTemplate(string $class): self;
    public function setHeaders(array $param): self;
    public function setTitle(string $title): self;
    public function setExtend(array $data): self;
    public function setBody(array $body): self;
    public function getContent(): array;
    public function toJson(): string;
    public function toArray(): array;
    public function send(array $openids): bool;
}