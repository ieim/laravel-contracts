<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\Abilities\Crud\DummySaveable;
use Ieim\LaravelContracts\Dummies\Abilities\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class SaveableTest extends BaseTestCase
{
    /**
     * A dummy saveable provider.
     *
     * @return array
     */
    public function saveableProvider(): array
    {
        return [
            [ new DummySaveable(), new DummyValidatesWhenResolvedTrue() ],
        ];
    }

    /**
     * @param DummySaveable $saveable
     * @dataProvider saveableProvider
     */
    public function testShowFunctionReturnsAChildOfReturnType(
        DummySaveable $saveable,
        ValidatesWhenResolved $request
    ): void {

        $actual = $saveable->save($request);
        $expected = ControllerReturnTypeInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
