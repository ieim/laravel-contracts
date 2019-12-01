<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\Abilities\Crud\DummyShowable;
use Ieim\LaravelContracts\Dummies\Abilities\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class ShowableTest extends BaseTestCase
{
    /**
     * A dummy showable provider.
     *
     * @return array
     */
    public function showableProvider(): array
    {
        return [
            [ new DummyShowable(), new DummyValidatesWhenResolvedTrue(), 1337 ],
        ];
    }

    /**
     * @param DummyShowable $showable
     * @dataProvider showableProvider
     */
    public function testShowFunctionReturnsAChildOfReturnType(
        DummyShowable $showable,
        ValidatesWhenResolved $request,
        $id
    ): void {

        $actual = $showable->show($id, $request);
        $expected = ControllerReturnTypeInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
