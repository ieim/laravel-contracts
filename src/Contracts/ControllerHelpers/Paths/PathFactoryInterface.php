<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths;

use Ieim\LaravelContracts\Contracts\Domains\DomainInterface;

interface PathFactoryInterface
{
    /**
     * @param string $type
     * @param DomainInterface $domain
     * @return PathInterface
     */
    public static function build(string $type, DomainInterface $domain): PathInterface;
}
