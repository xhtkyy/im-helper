<?php

namespace Xhtkyy\ImHelper\IM\Facades;

use Hyperf\Contract\ContainerInterface;
use Xhtkyy\ImHelper\IM\Services\GroupService;

class GroupFactory {

    public function __invoke(ContainerInterface $container) {
        return $container->make(GroupService::class);
    }

}