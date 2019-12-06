<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Crud\DummySaveable;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyValidatesWhenResolvedTrue;
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
        $expected = RawResponseResolverInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
