<?php
declare(strict_types=1);
/**
 * @author   crayxn <https://github.com/crayxn>
 * @contact  crayxn@qq.com
 */

namespace Xhtkyy\ImHelper\Exception;

class ClassNotFoundException extends \Exception
{
    protected $message = "class not found!";
}