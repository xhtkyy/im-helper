<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Xhtkyy\ImHelper;

use Xhtkyy\ImHelper\IM\Facades\AccountFactory;
use Xhtkyy\ImHelper\IM\Facades\GroupFactory;
use Xhtkyy\ImHelper\IM\Facades\PairFactory;
use Xhtkyy\ImHelper\IM\Interface\AccountInterface;
use Xhtkyy\ImHelper\IM\Interface\GroupInterface;
use Xhtkyy\ImHelper\IM\Interface\PairInterface;

class ConfigProvider {
    public function __invoke(): array {
        return [
            'dependencies' => [
                GroupInterface::class   => GroupFactory::class,
                PairInterface::class    => PairFactory::class,
                AccountInterface::class => AccountFactory::class
            ],
            'commands'     => [
            ],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
