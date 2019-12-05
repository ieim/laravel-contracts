<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts;

use Ieim\LaravelContracts\Contracts\RawResponseResolverInterface;
use Ieim\LaravelContracts\Contracts\RawResponseInterface;
use Ieim\LaravelContracts\Dummies\Clauses\Laravel\DummyView;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class DummyRawResponseResolver implements RawResponseResolverInterface
{
    public function toView(RawResponseInterface $response): View
    {
        return new DummyView();
    }

    public function toJson(RawResponseInterface $response): JsonResponse
    {
        return new JsonResponse();
    }
}
