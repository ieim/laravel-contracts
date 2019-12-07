<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths\PathFactoryInterface;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths\PathInterface;

class DummyPathFactory implements PathFactoryInterface
{
    /**
     * @inheritDoc
     */
    public static function build(string $type, string $domainName): PathInterface
    {
        return new DummyPath();
    }
}
