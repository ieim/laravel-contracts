<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers;

use Exception;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations\DummyOperation;
use Illuminate\Support\Collection;

class DummyRawResponse implements RawResponseInterface
{
    /**
     * @param OperationInterface $operation
     * @return RawResponseInterface
     */
    public static function fromController(OperationInterface $operation): RawResponseInterface
    {
        return new DummyRawResponse();
    }

    /**
     * @param OperationInterface $operation
     * @param Collection $data
     * @return RawResponseInterface
     */
    public static function fromControllerWithData(
        OperationInterface $operation,
        Collection $data
    ): RawResponseInterface {

        return new DummyRawResponse();
    }

    /**
     * @return Collection
     */
    public function data(): Collection
    {
        return collect([
            'dummy' => 'data',
        ]);
    }

    /**
     * @return OperationInterface
     */
    public function operation(): OperationInterface
    {
        return new DummyOperation();
    }

    /**
     * @param Collection $collectionToMerge
     * @throws Exception
     */
    public function append(Collection $collectionToMerge): void
    {
        throw new Exception('dummy_append');
    }

    /**
     * @param array $collectionToMerge
     * @throws Exception
     */
    public function appendAssocArray(array $collectionToMerge): void
    {
        throw new Exception('dummy_append_assoc_array');
    }

    /**
     * @throws Exception
     */
    public function reset(): void
    {
        throw new Exception('dummy_reset');
    }
}
