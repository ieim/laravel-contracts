<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\AbilityBundles;

use Ieim\LaravelContracts\AbilityBundles\ControllerReturnTypeInterface;
use Ieim\LaravelContracts\AbilityBundles\RawResponseInterface;
use Ieim\LaravelContracts\Dummies\Abilities\Laravel\DummyView;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class DummyControllerReturnType implements ControllerReturnTypeInterface
{
    public function view(RawResponseInterface $response): View
    {
        return new DummyView();
    }

    public function json(RawResponseInterface $response): JsonResponse
    {
        return new JsonResponse();
    }
}
