<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Crud\DummyUpdatable;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class UpdatableTest extends BaseTestCase
{
    /**
     * A dummy updatable provider.
     *
     * @return array
     */
    public function updatableProvider(): array
    {
        return [
            [ new DummyUpdatable(), new DummyValidatesWhenResolvedTrue(), 1337 ],
        ];
    }

    /**
     * @param DummyUpdatable $updatable
     * @dataProvider updatableProvider
     */
    public function testShowFunctionReturnsAChildOfReturnType(
        DummyUpdatable $updatable,
        ValidatesWhenResolved $request,
        $id
    ): void {

        $actual = $updatable->update($id, $request);
        $expected = RawResponseResolverInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
