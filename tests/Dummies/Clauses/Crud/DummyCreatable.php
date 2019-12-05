<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Crud;

use Ieim\LaravelContracts\Clauses\Crud\Creatable;
use Ieim\LaravelContracts\Contracts\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Contracts\DummyRawResponseResolver;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyCreatable implements Creatable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return RawResponseResolverInterface
     */
    public function create(ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }
}
