<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;

class DummyPath implements PathInterface
{
    /**
     * @inheritDoc
     */
    public function resolve(OperationInterface $operation): string
    {
        return 'dummy_resolve';
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return 'dummy_type';
    }
}
