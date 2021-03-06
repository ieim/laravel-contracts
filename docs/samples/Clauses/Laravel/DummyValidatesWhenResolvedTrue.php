<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Laravel;

use Illuminate\Contracts\Validation\ValidatesWhenResolved;

/**
 * Class DummyValidatesWhenResolvedTrue
 * @package Ieim\LaravelContracts\Dummies\Clauses\Laravel
 *
 * We dont test third party code.
 * @codeCoverageIgnore
 */
class DummyValidatesWhenResolvedTrue implements ValidatesWhenResolved
{
    /**
     * @return bool|void
     */
    public function validateResolved()
    {
        return false;
    }
}
