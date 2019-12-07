<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\Domains;

use Ieim\LaravelContracts\Contracts\Domains\DomainInterface;

class DummyDomain implements DomainInterface
{
    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return 'dummy_name';
    }

    /**
     * @inheritDoc
     */
    public function view(): string
    {
        return 'dummy_view';
    }

    /**
     * @inheritDoc
     */
    public function resource(): string
    {
        return 'dummy_resource';
    }
}
