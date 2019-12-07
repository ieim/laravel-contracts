<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers;

use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\DummyRawResponse;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\DummyRawResponseResolver;
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

    /**
     * @param DummyRawResponseResolver $rawResponseResolver
     * @param DummyRawResponse $rawResponse
     * @dataProvider rawResponseResolverProvider
     */
    public function testToResponse(
        DummyRawResponseResolver $rawResponseResolver,
        DummyRawResponse $rawResponse
    ) : void {

        Mockery::mock('Illuminate\Http\JsonResponse');

        $expected = JsonResponse::class;
        $actual = $rawResponseResolver->toResponse('', $rawResponse);

        $this->assertInstanceOf($expected, $actual);
    }
}
