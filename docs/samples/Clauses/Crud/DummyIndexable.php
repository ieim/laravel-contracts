<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Crud;

use Ieim\LaravelContracts\Clauses\Crud\Indexable;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers\DummyRawResponseResolver;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyIndexable implements Indexable
{
    /**
     * @param ValidatesWhenResolved $request
     * @return RawResponseResolverInterface
     */
    public function index(ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }
}
