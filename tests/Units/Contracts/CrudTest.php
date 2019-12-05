<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts;

use Ieim\LaravelContracts\Contracts\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Dummies\Contracts\DummyCrud;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class CrudTest extends BaseTestCase
{
    public function controllerReturnTypeProvider(): array
    {
        return [
            [ new DummyCrud(), new DummyValidatesWhenResolvedTrue(), 1337 ],
        ];
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationIndex(
        DummyCrud $crud,
        ValidatesWhenResolved $request
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->index($request);
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationCreate(
        DummyCrud $crud,
        ValidatesWhenResolved $request
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->create($request);
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationSave(
        DummyCrud $crud,
        ValidatesWhenResolved $request
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->save($request);
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationShow(
        DummyCrud $crud,
        ValidatesWhenResolved $request,
        $id
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->show($id, $request);
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationEdit(
        DummyCrud $crud,
        ValidatesWhenResolved $request,
        $id
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->edit($id, $request);
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationUpdate(
        DummyCrud $crud,
        ValidatesWhenResolved $request,
        $id
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->update($id, $request);
        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider controllerReturnTypeProvider
     * @param DummyCrud $crud
     * @param ValidatesWhenResolved $request
     */
    public function testOperationDelete(
        DummyCrud $crud,
        ValidatesWhenResolved $request,
        $id
    ) : void {

        $expected = RawResponseResolverInterface::class;
        $actual = $crud->delete($id, $request);
        $this->assertInstanceOf($expected, $actual);
    }
}
