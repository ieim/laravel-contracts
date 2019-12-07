<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;

interface PathInterface
{
    const TYPE_COLLECTION = 'COLLECTION';
    const TYPE_RESOURCE = 'RESOURCE';
    const TYPE_JSON = 'JSON';

    const DEFAULT_TYPE = self::TYPE_JSON;

    /**
     * Retrieve the template path.
     *
     * @param OperationInterface $operation
     * @return string
     */
    public function toString(OperationInterface $operation): string;

    /**
     * Retrieve type.
     *
     * @param OperationInterface $operation
     * @return string
     */
    public function type(): string;
}
