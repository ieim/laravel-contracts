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

    const OPERATIONS_CRUD = [
        self::OPERATION_INDEX,
        self::OPERATION_CREATE,
        self::OPERATION_DELETE,
        self::OPERATION_EDIT,
        self::OPERATION_SAVE,
        self::OPERATION_SHOW,
        self::OPERATION_UPDATE,
    ];

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
     * Does current operations contain current operation?
     *
     * @return bool
     */
    public function isValid(): bool;

    /**
     * Retrieve all operation.
     *
     * @return Collection
     */
    public function operations(): Collection;
}
