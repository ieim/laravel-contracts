<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers;

use Exception;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseInterface;
use Illuminate\Support\Collection;

class DummyRawResponse implements RawResponseInterface
{
    /**
     * @inheritDoc
     */
    public static function fromController(string $operation): RawResponseInterface
    {
        return new DummyRawResponse();
    }

    /**
     * @inheritDoc
     */
    public function path(): string
    {
        return 'dummy_path';
    }

    /**
     * @inheritDoc
     */
    public function data(): Collection
    {
        return collect([
            'dummy' => 'data',
        ]);
    }

    /**
     * @inheritDoc
     */
    public function append(Collection $collectionToMerge): void
    {
        throw new Exception('dummy_append');
    }

    /**
     * @inheritDoc
     */
    public function appendAssocArray(array $collectionToMerge): void
    {
        throw new Exception('dummy_append_assoc_array');
    }
}
