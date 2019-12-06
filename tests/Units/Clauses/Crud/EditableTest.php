<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Crud\DummyEditable;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class EditableTest extends BaseTestCase
{
    /**
     * A dummy editable provider.
     *
     * @return array
     */
    public function editableProvider(): array
    {
        return [
            [ new DummyEditable(), new DummyValidatesWhenResolvedTrue(), 1337 ],
        ];
    }

    /**
     * @param DummyEditable $editable
     * @dataProvider editableProvider
     */
    public function testShowFunctionReturnsAChildOfReturnType(
        DummyEditable $editable,
        ValidatesWhenResolved $request,
        $id
    ): void {

        $actual = $editable->edit($id, $request);
        $expected = RawResponseResolverInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
