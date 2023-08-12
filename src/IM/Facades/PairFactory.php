<?php

namespace Xhtkyy\ImHelper\IM\Facades;

use Hyperf\Contract\ContainerInterface;
use Xhtkyy\ImHelper\IM\Services\PairService;

class PairFactory {

    public function __invoke(ContainerInterface $container) {
        return $container->make(PairService::class);
    }

}