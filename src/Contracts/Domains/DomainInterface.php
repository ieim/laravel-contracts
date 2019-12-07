<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\Domains;

interface DomainInterface
{
    /**
     * Retrieve name of current domain.
     *
     * @return string
     */
    public function name(): string;

    /**
     * Retrieve view name of current domain.
     *
     * @return string
     */
    public function view(): string;

    /**
     * Retrieve resource name of current domain.
     *
     * @return string
     */
    public function resource(): string;
}
