<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Abilities\Crud;

use Ieim\LaravelContracts\Abilities\Crud\Deletable;
use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\AbilityBundles\DummyControllerReturnType;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyDeletable implements Deletable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return ControllerReturnTypeInterface
     */
    public function delete($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }
}
