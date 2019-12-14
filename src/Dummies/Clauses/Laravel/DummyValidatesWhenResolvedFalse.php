<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Laravel;

use Illuminate\Contracts\Validation\ValidatesWhenResolved;

/**
 * Class DummyValidatesWhenResolvedFalse
 * @package Ieim\LaravelContracts\Dummies\Clauses\Laravel
 *
 * We dont test third party code.
 * @codeCoverageIgnore
 */
class DummyValidatesWhenResolvedFalse implements ValidatesWhenResolved
{
    /**
     * @inheritDoc
     */
    public function validateResolved(): bool
    {
        return true;
    }
}
