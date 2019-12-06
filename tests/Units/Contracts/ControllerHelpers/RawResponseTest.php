<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests\Contracts\ControllerHelpers;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\DummyRawResponse;
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

    /**
     * @param DummyRawResponse $rawResponse
     */
    public function testFromController() :void
    {
        $expected = RawResponseInterface::class;
        $actual = DummyRawResponse::fromController('');

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
}
