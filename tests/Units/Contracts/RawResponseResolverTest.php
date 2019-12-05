<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts;

use Ieim\LaravelContracts\Dummies\Contracts\DummyRawResponseResolver;
use Ieim\LaravelContracts\Dummies\Contracts\DummyRawResponse;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Mockery;

class RawResponseResolverTest extends BaseTestCase
{
    public function rawResponseResolverProvider(): array
    {
        return [
            [ new DummyRawResponseResolver(), new DummyRawResponse() ],
        ];
    }

    /**
     * @param DummyRawResponseResolver $rawResponseResolver
     * @param DummyRawResponse $rawResponse
     * @dataProvider rawResponseResolverProvider
     */
    public function testView(
        DummyRawResponseResolver $rawResponseResolver,
        DummyRawResponse $rawResponse
    ) : void {

        $expected = View::class;
        $actual = $rawResponseResolver->toView($rawResponse);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyRawResponseResolver $rawResponseResolver
     * @param DummyRawResponse $rawResponse
     * @dataProvider rawResponseResolverProvider
     */
    public function testJson(
        DummyRawResponseResolver $rawResponseResolver,
        DummyRawResponse $rawResponse
    ) : void {

        Mockery::mock('Illuminate\Http\JsonResponse');

        $expected = JsonResponse::class;
        $actual = $rawResponseResolver->toJson($rawResponse);

        $this->assertInstanceOf($expected, $actual);
    }
}
