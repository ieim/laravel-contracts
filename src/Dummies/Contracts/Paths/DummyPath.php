<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;
use Ieim\LaravelContracts\Contracts\Paths\PathInterface;

class DummyPath implements PathInterface
{
    /**
     * @inheritDoc
     */
    public function toString(OperationInterface $operation): string
    {
        return 'dummy_to_string';
    }

    /**
     * @inheritDoc
     */
    public function toResourceClassName(OperationInterface $operation): string
    {
        return 'dummy_to_resource_class_name';
    }

    /**
     * @inheritDoc
     */
    public function type(): string
    {
        return 'dummy_type';
    }
}
