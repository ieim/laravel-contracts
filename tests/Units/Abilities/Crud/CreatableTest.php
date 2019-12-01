<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\Abilities\Crud\DummyCreatable;
use Ieim\LaravelContracts\Dummies\Abilities\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class CreatableTest extends BaseTestCase
{
    /**
     * A dummy creatable provider.
     *
     * @return array
     */
    public function creatableProvider(): array
    {
        return [
            [ new DummyCreatable(), new DummyValidatesWhenResolvedTrue() ],
        ];
    }

    /**
     * @param DummyCreatable $creatable
     * @dataProvider creatableProvider
     */
    public function testCreateFunctionReturnsAChildOfReturnType(
        DummyCreatable $creatable,
        ValidatesWhenResolved $request
    ): void {

        $actual = $creatable->create($request);
        $expected = ControllerReturnTypeInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
