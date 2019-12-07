<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers\Operations;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\DummyCrud;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Tests\BaseTestCase;

class OperationTest extends BaseTestCase
{
    public function operationProvider(): array
    {
        return [
            [ new DummyOperation() ],
        ];
    }

    public function crudProvider(): array
    {
        return [
            [ new DummyCrud() ],
        ];
    }

    /**
     * @param DummyCrud $crud
     * @dataProvider crudProvider
     */
    public function testFromCrudController(DummyCrud $crud) :void
    {
        $expected = OperationInterface::class;
        $actual = DummyOperation::fromCrudController('', $crud);

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
}
