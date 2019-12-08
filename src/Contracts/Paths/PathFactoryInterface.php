<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;

interface PathFactoryInterface
{
    /**
     * @param string $type
     * @param DomainInterface $domain
     * @return PathInterface
     */
    public static function build(string $type, DomainInterface $domain): PathInterface;
}
