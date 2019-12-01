<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\AbilityBundles;

use Ieim\LaravelContracts\Dummies\AbilityBundles\DummyControllerReturnType;
use Ieim\LaravelContracts\Dummies\AbilityBundles\DummyRawResponse;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Mockery;

class ControllerReturnTypeTest extends BaseTestCase
{
    public function controllerReturnTypeProvider(): array
    {
        return [
            [ new DummyControllerReturnType(), new DummyRawResponse() ],
        ];
    }

    /**
     * @param DummyControllerReturnType $controllerReturnType
     * @param DummyRawResponse $rawResponse
     * @dataProvider controllerReturnTypeProvider
     */
    public function testView(
        DummyControllerReturnType $controllerReturnType,
        DummyRawResponse $rawResponse
    ) : void {

        $expected = View::class;
        $actual = $controllerReturnType->view($rawResponse);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyControllerReturnType $controllerReturnType
     * @param DummyRawResponse $rawResponse
     * @dataProvider controllerReturnTypeProvider
     */
    public function testJson(
        DummyControllerReturnType $controllerReturnType,
        DummyRawResponse $rawResponse
    ) : void {

        Mockery::mock('Illuminate\Http\JsonResponse');

        $expected = JsonResponse::class;
        $actual = $controllerReturnType->json($rawResponse);

        $this->assertInstanceOf($expected, $actual);
    }
}
