<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Crud;

use Ieim\LaravelContracts\Clauses\Crud\Showable;
use Ieim\LaravelContracts\Contracts\RawResponseResolverInterface;
use Ieim\LaravelContracts\Dummies\Contracts\DummyRawResponseResolver;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

class DummyShowable implements Showable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return RawResponseResolverInterface
     */
    public function show($id, ValidatesWhenResolved $request): RawResponseResolverInterface
    {
        return new DummyRawResponseResolver();
    }
}
