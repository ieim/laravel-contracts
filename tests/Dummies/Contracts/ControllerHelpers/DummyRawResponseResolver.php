<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Contracts\ControllerHelpers;

use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseInterface;
use Ieim\LaravelContracts\Contracts\ControllerHelpers\RawResponseResolverInterface;
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
