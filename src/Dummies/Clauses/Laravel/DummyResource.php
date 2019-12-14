<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Laravel;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DummyResource extends JsonResource
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
