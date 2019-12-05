<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\RawResponseResolverInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

interface Creatable
{
    /**
     * @param ValidatesWhenResolved $request
     * @return RawResponseResolverInterface
     */
    public function create(ValidatesWhenResolved $request): RawResponseResolverInterface;
}
