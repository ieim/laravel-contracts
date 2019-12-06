<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Contracts\ControllerHelpers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

interface RawResponseResolverInterface
{
    public function toView(RawResponseInterface $response): View;
    public function toJson(RawResponseInterface $response): JsonResponse;
}
