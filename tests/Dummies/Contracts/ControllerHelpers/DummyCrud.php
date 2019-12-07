<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\CrudInterface;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyCrud implements CrudInterface
{
    /**
     * @inheritDoc
     */
    public function create(ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }

    /**
     * @inheritDoc
     */
    public function delete($id, ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }

    /**
     * @inheritDoc
     */
    public function edit($id, ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }

    /**
     * @inheritDoc
     */
    public function index(ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }

    /**
     * @inheritDoc
     */
    public function save(ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }

    /**
     * @inheritDoc
     */
    public function show($id, ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }

    /**
     * @inheritDoc
     */
    public function update($id, ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }
}
