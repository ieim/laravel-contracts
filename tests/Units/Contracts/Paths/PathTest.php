<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\Paths;

use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Dummies\Contracts\Paths\DummyPath;
use Ieim\LaravelContracts\Tests\BaseTestCase;

class PathTest extends BaseTestCase
{
    public function pathProvider(): array
    {
        return [
            [ new DummyPath(), new DummyOperation() ],
        ];
    }

    /**
     * @param DummyPath $path
     * @dataProvider pathProvider
     */
    public function testResolveResponsePath(
        DummyPath $path,
        DummyOperation $operation
    ) : void {

        $expected = 'dummy_resolve';
        $actual = $path->resolve($operation);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param DummyPath $path
     * @dataProvider pathProvider
     */
    public function testType(
        DummyPath $path,
        DummyOperation $operation
    ) : void {

        $expected = 'dummy_type';
        $actual = $path->type($operation);

        $this->assertEquals($expected, $actual);
    }
}
