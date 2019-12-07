<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers\Operations;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Support\Collection;

class OperationTest extends BaseTestCase
{
    public function operationProvider(): array
    {
        return [
            [ new DummyOperation() ],
        ];
    }

    public function testFromCrudController() :void
    {
        $expected = OperationInterface::class;
        $actual = DummyOperation::fromCrudController('');

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyOperation $operation
     * @dataProvider operationProvider
     */
    public function testPath(
        DummyOperation $operation
    ) : void {

        $expected = 'dummy_current';
        $actual = $operation->current();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param DummyOperation $operation
     * @dataProvider operationProvider
     */
    public function testOperations(
        DummyOperation $operation
    ) : void {

        $expected = Collection::class;
        $actual = $operation->operations();

        $this->assertInstanceOf($expected, $actual);
    }
}
