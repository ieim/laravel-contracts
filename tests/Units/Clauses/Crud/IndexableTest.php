<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Crud\DummyIndexable;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyValidatesWhenResolvedTrue;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class IndexableTest extends BaseTestCase
{
    /**
     * A dummy indexable provider.
     *
     * @return array
     */
    public function indexableProvider(): array
    {
        return [
            [ new DummyIndexable(), new DummyValidatesWhenResolvedTrue() ],
        ];
    }

    /**
     * @param DummyIndexable $indexable
     * @dataProvider indexableProvider
     */
    public function testIndexFunctionReturnsAChildOfReturnType(
        DummyIndexable $indexable,
        ValidatesWhenResolved $request
    ): void {

        $actual = $indexable->index($request);
        $expected = RawResponseResolverInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
