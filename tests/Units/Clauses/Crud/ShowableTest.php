<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Crud\DummyShowable;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyValidatesWhenResolvedTrue;
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
        $expected = RawResponseResolverInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
