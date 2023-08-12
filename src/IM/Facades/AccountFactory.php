<?php

namespace Xhtkyy\ImHelper\IM\Facades;

use Hyperf\Contract\ContainerInterface;
use Xhtkyy\ImHelper\IM\Services\AccountService;

class AccountFactory {

    public function __invoke(ContainerInterface $container) {
        return $container->make(AccountService::class);
    }

}