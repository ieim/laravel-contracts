<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths\PathInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Paths\DummyPathFactory;
use Ieim\LaravelContracts\Tests\BaseTestCase;

class PathFactoryTest extends BaseTestCase
{

    public function testBuild() :void
    {
        $expected = PathInterface::class;
        $actual = DummyPathFactory::build(PathInterface::DEFAULT_TYPE, 'testing');

        $this->assertInstanceOf($expected, $actual);
    }
}
