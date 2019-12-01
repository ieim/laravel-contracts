<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\AbilityBundles;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\AbilityBundles\CrudInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyCrud implements CrudInterface
{
    /**
     * @inheritDoc
     */
    public function create(ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }

    /**
     * @inheritDoc
     */
    public function delete($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }

    /**
     * @inheritDoc
     */
    public function edit($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }

    /**
     * @inheritDoc
     */
    public function index(ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }

    /**
     * @inheritDoc
     */
    public function save(ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }

    /**
     * @inheritDoc
     */
    public function show($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }

    /**
     * @inheritDoc
     */
    public function update($id, ValidatesWhenResolved $request): ControllerReturnTypeInterface
    {
        return new DummyControllerReturnType();
    }
}
