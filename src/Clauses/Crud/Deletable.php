<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Clauses\Crud;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
use Illuminate\Contracts\Validation\ValidatesWhenResolved;

interface Deletable
{
    /**
     * @param string|int $id
     * @param ValidatesWhenResolved $request
     * @return RawResponseResolverInterface
     */
    public function delete($id, ValidatesWhenResolved $request): RawResponseResolverInterface;
}
