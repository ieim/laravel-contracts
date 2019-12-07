<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\CrudInterface;

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
     * @param CrudInterface $crud
     * @return OperationInterface
     */
    public static function fromCrudController(
        string $operation,
        CrudInterface $crud
    ): OperationInterface;

    /**
     * Retrieve current operation.
     *
     * @param array $collectionToMerge
     * @return void
     */
    public function current(): string;
}
