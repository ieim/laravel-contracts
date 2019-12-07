<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\CrudInterface;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;

class DummyOperation implements OperationInterface
{
    /**
     * @inheritDoc
     */
    public static function fromCrudController(
        string $operation,
        CrudInterface $crud
    ): OperationInterface {

        return new DummyOperation();
    }

    /**
     * @inheritDoc
     */
    public function current(): string
    {
        return 'dummy_current';
    }
}
