<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Abilities\Laravel;

use Illuminate\Contracts\Validation\ValidatesWhenResolved;

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
