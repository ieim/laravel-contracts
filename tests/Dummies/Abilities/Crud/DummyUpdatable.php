<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Abilities\Crud;

use Ieim\LaravelContracts\Abilities\Crud\Updatable;
use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\AbilityBundles\DummyControllerReturnType;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyUpdatable implements Updatable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return ControllerReturnTypeInterface
     */
    public function update($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }
}
