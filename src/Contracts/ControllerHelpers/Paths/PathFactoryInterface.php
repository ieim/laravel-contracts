<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths;

interface PathFactoryInterface
{
    /**
     * @param string $type
     * @param string $domainName
     * @return PathFactoryInterface
     */
    public static function build(string $type, string $domainName): PathInterface;
}
