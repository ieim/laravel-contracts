<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers;

use Exception;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\DummyRawResponse;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Ieim\LaravelContracts\Tests\BaseTestCase;
use Illuminate\Support\Collection;

class RawResponseTest extends BaseTestCase
{
    public function rawResponseProvider(): array
    {
        return [
            [ new DummyRawResponse() ],
        ];
    }

    public function operationProvider(): array
    {
        return [
            [ new DummyOperation() ],
        ];
    }

    /**
     * @dataProvider operationProvider
     * @param DummyOperation $operation
     */
    public function testFromController(DummyOperation $operation) :void
    {
        $expected = RawResponseInterface::class;
        $actual = DummyRawResponse::fromController($operation);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @dataProvider operationProvider
     * @param DummyOperation $operation
     */
    public function testFromControllerWithData(DummyOperation $operation) :void
    {
        $data = collect();
        $expected = RawResponseInterface::class;
        $actual = DummyRawResponse::fromControllerWithData($operation, $data);

        $this->assertInstanceOf($expected, $actual);
    }

    /**
     * @param DummyRawResponse $rawResponse
     * @dataProvider rawResponseProvider
     */
    public function testPath(
        DummyRawResponse $rawResponse
    ) : void {

        $expected = 'dummy_path';
        $actual = $rawResponse->path();

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param DummyRawResponse $rawResponse
     * @dataProvider rawResponseProvider
     */
    public function testData(
        DummyRawResponse $rawResponse
    ) : void {

        $expected = collect([
            'dummy' => 'data',
        ]);
        $actual = $rawResponse->data();

        $this->assertInstanceOf(Collection::class, $actual);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @param DummyRawResponse $rawResponse
     * @throws Exception
     * @dataProvider rawResponseProvider
     */
    public function testAppend(
        DummyRawResponse $rawResponse
    ) : void {

        $append = collect();
        $expected = 'dummy_append';
        $this->expectErrorMessage($expected);
        $rawResponse->append($append);
    }

    /**
     * @param DummyRawResponse $rawResponse
     * @throws Exception
     * @dataProvider rawResponseProvider
     */
    public function testAppendAssocArray(
        DummyRawResponse $rawResponse
    ) : void {

        $append = [];
        $expected = 'dummy_append_assoc_array';
        $this->expectErrorMessage($expected);
        $rawResponse->appendAssocArray($append);
    }

    /**
     * @param DummyRawResponse $rawResponse
     * @throws Exception
     * @dataProvider rawResponseProvider
     */
    public function testReset(
        DummyRawResponse $rawResponse
    ) : void {

        $expected = 'dummy_reset';
        $this->expectErrorMessage($expected);
        $rawResponse->reset();
    }
}
