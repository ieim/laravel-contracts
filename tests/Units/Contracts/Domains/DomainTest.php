<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\Domains;

use Ieim\LaravelContracts\Dummies\Contracts\Domains\DummyDomain;
use Ieim\LaravelContracts\Tests\BaseTestCase;

class DomainTest extends BaseTestCase
{
    public function domainProvider(): array
    {
        return [
            [ new DummyDomain() ],
        ];
    }

    /**
     * @param DummyDomain $dummyDomain
     * @dataProvider domainProvider
     */
    public function testName(DummyDomain $dummyDomain) :void
    {
        $expected = 'dummy_name';
        $actual = $dummyDomain->name();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param DummyDomain $dummyDomain
     * @dataProvider domainProvider
     */
    public function testView(DummyDomain $dummyDomain) :void
    {
        $expected = 'dummy_view';
        $actual = $dummyDomain->view();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param DummyDomain $dummyDomain
     * @dataProvider domainProvider
     */
    public function testResource(DummyDomain $dummyDomain) :void
    {
        $expected = 'dummy_resource';
        $actual = $dummyDomain->resource();

        $this->assertEquals($expected, $actual);
    }
}
