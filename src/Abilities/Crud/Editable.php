<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Abilities\Crud;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

interface Editable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return ControllerReturnTypeInterface
     */
    public function edit($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface;
}
