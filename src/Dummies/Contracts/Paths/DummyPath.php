<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyResource;

class DummyPath implements PathInterface
{
    /**
     * @inheritDoc
     */
    public function toBlade(OperationInterface $operation): string
    {
        return 'dummy_to_blade';
    }

    /**
     * @inheritDoc
     */
    public function toResourceClassName(OperationInterface $operation): string
    {
        return DummyResource::class;
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return 'dummy_type';
    }
}
