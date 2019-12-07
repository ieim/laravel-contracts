<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers\Paths;

use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Paths\DummyPath;
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
    public function testToString(
        DummyPath $path,
        DummyOperation $operation
    ) : void {

        $expected = 'dummy_to_string';
        $actual = $path->toString($operation);

        $this->assertEquals($expected, $actual);
    }
}
