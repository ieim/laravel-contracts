<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\Paths;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\Operations\OperationInterface;

interface PathInterface
{
    const TYPE_COLLECTION = 'COLLECTION';
    const TYPE_RESOURCE = 'RESOURCE';
    const TYPE_JSON = 'JSON';

    const DEFAULT_TYPE = self::TYPE_JSON;

    /**
     * Retrieve the blade path.
     *
     * @param OperationInterface $operation
     * @return string
     */
    public function toBlade(OperationInterface $operation): string;

    /**
     * Get the class name of this API Resource|Collection.
     *
     * @param OperationInterface $operation
     * @return string
     */
    public function toResourceClassName(OperationInterface $operation): string;

    /**
     * Retrieve type.
     *
     * @param OperationInterface $operation
     * @return string
     */
    public function type(): string;
}
