<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Laravel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * Class DummyCollection
 * @package Ieim\LaravelContracts\Dummies\Clauses\Laravel
 *
 * We dont test third party code.
 * @codeCoverageIgnore
 */
class DummyCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'dummy' => true,
        ];
    }
}
