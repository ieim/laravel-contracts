<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\Abilities\Crud\DummyIndexable;
use Ieim\LaravelContracts\Dummies\Abilities\Laravel\DummyValidatesWhenResolvedTrue;
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
     * Test that true does in fact equal true
     *
     * @param DummyIndexable $indexable
     * @dataProvider indexableProvider
     */
    public function testIndexFunctionReturnsAChildOfReturnType(
        DummyIndexable $indexable,
        ValidatesWhenResolved $request
    ): void {

        $actual = $indexable->index($request);
        $expected = ControllerReturnTypeInterface::class;

        $this->assertInstanceOf($expected, $actual);
    }
}
