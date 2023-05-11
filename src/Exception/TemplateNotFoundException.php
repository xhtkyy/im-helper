<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Exception;

class TemplateNotFoundException extends \Exception
{
    protected $message = "模板不存在";
}