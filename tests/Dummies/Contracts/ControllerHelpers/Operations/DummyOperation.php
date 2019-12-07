<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\Operations;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Illuminate\Support\Collection;

class DummyOperation implements OperationInterface
{
    /**
     * @inheritDoc
     */
    public static function fromCrudController(
        string $operation
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

    /**
     * @inheritDoc
     */
    public function operations(): Collection
    {
        return collect();
    }
}
