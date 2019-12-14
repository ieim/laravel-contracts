<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Laravel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

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
