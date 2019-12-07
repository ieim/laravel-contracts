<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations;

use Illuminate\Support\Collection;

interface OperationInterface
{
    const OPERATION_CREATE = 'create';
    const OPERATION_DELETE = 'delete';
    const OPERATION_EDIT = 'edit';
    const OPERATION_INDEX = 'index';
    const OPERATION_SAVE = 'save';
    const OPERATION_SHOW = 'show';
    const OPERATION_UPDATE = 'update';

    /**
     * Magic generation of Operation::class object.
     *
     * @param string $operation
     * @throw InvalidArgumentException when $operation is invalid
     * @return OperationInterface
     */
    public static function fromCrudController(
        string $operation
    ): OperationInterface;

    /**
     * Retrieve current operation.
     *
     * @return string
     */
    public function current(): string;

    /**
     * Retrieve all operation.
     *
     * @return Collection
     */
    public function operations(): Collection;
}
