<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\AbilityBundles;

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

interface ControllerReturnTypeInterface
{
    public function view(RawResponseInterface $response): View;
    public function json(RawResponseInterface $response): JsonResponse;
}
