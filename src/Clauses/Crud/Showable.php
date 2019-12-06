<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

interface Showable
{
    /**
     * @param $id
     * @param ValidatesWhenResolved $request
     * @return RawResponseResolverInterface
     */
    public function show($id, ValidatesWhenResolved $request): RawResponseResolverInterface;
}
