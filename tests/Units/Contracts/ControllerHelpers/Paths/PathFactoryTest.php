<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths\PathInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Paths\DummyPathFactory;
use Ieim\LaravelContracts\Dummies\Contracts\Domains\DummyDomain;
use Ieim\LaravelContracts\Tests\BaseTestCase;

class PathFactoryTest extends BaseTestCase
{
    public function domainProvider(): array
    {
        return [
            [ new DummyDomain() ],
        ];
    }

    /**
     * @param DummyDomain $domain
     * @dataProvider domainProvider
     */
    public function testBuild(DummyDomain $domain) :void
    {
        $expected = PathInterface::class;
        $actual = DummyPathFactory::build(PathInterface::DEFAULT_TYPE, $domain);

        $this->assertInstanceOf($expected, $actual);
    }
}
