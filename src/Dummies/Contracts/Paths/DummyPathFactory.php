<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\Paths\PathFactoryInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;
use Ieim\LaravelContracts\Contracts\Paths\Domains\DomainInterface;

class DummyPathFactory implements PathFactoryInterface
{
    /**
     * @inheritDoc
     */
    public static function build(string $type, DomainInterface $domain): PathInterface
    {
        return new DummyPath();
    }
}
