<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\Abilities\Crud\DummyDeletable;
use Ieim\LaravelContracts\Dummies\Abilities\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DeletableTest extends BaseTestCase
{
    /**
     * A dummy deletable provider.
     *
     * @return array
     */
    public function deletableProvider(): array
    {
        return [
            [ new DummyDeletable(), new DummyValidatesWhenResolvedTrue(), 1337 ],
        ];
    }

    /**
     * @param DummyDeletable $deletable
     * @dataProvider deletableProvider
     */
    public function testShowFunctionReturnsAChildOfReturnType(
        DummyDeletable $deletable,
        ValidatesWhenResolved $request,
        $id
    ): void {

        $actual = $deletable->delete($id, $request);
        $expected = ControllerReturnTypeInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
