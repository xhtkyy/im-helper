<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Exception;

class ConstantNotFoundException extends \Exception
{
    protected $message = "枚举未找到";
}