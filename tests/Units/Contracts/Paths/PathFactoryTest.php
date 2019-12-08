<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\Paths\PathInterface;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\DummyPathFactory;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\Domains\DummyDomain;
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
