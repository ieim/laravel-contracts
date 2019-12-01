<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

interface Saveable
{
    /**
     * @param ValidatesWhenResolved $request
     * @return ControllerReturnTypeInterface
     */
    public function save(ValidatesWhenResolved $request): ControllerReturnTypeInterface;
}
