<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Abilities\Crud;

use Ieim\LaravelContracts\Abilities\Crud\Showable;
use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\Dummies\AbilityBundles\DummyControllerReturnType;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyShowable implements Showable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return ControllerReturnTypeInterface
     */
    public function show($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }
}
