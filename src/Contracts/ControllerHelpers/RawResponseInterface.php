<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelControllerHelpers\Operations\Operation;
use Illuminate\Support\Collection;
use InvalidArgumentException;

interface RawResponseInterface
{
    /**
     * Magic generation of a $rawResponse object.
     * When we create a object via this constructor, it will automagically create
     * appropriated paths for us.
     *
     * If you want to append the paths manually consider initializing the object with
     * default constructor.
     *
     * @param OperationInterface $operation
     * @return RawResponseInterface
     */
    public static function fromController(OperationInterface $operation): RawResponseInterface;

    /**
     * Magic generation of a $rawResponse object and set data set.
     * When we create a object via this constructor, it will automagically create
     * appropriated paths for us.
     *
     * After that it will append data to the current object.
     *
     * If you want to append the paths manually consider initializing the object with
     * default constructor.
     *
     * @param OperationInterface $operation
     * @param Collection $data
     * @return RawResponseInterface
     */
    public static function fromControllerWithData(
        OperationInterface $operation,
        Collection $data
    ): RawResponseInterface;

    /**
     * Retrieve data.
     *
     * @return Collection
     */
    public function data(): Collection;

    /**
     * Retrieve operation.
     *
     * @return OperationInterface
     */
    public function operation(): OperationInterface;

    /**
     * Append a collection to current data set.
     * Usually [key => (mixed) value].
     *
     * @param Collection $dataToMerge
     * @throws InvalidArgumentException if no key is specified
     * @return void
     */
    public function append(Collection $dataToMerge): void;

    /**
     * Append a associative array to current data set.
     * Usually [key => (mixed) value].
     *
     * @param array $dataToMerge
     * @throws InvalidArgumentException if no key is specified
     * @return void
     */
    public function appendAssocArray(array $dataToMerge): void;

    /**
     * Reset current data set, basically remove every index.
     *
     * @return void
     */
    public function reset(): void;
}
