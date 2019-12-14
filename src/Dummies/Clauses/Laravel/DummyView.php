<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Dummies\Clauses\Laravel;

use Illuminate\Contracts\View\View;

/**
 * Class DummyView
 * @package Ieim\LaravelContracts\Dummies\Clauses\Laravel
 *
 * We dont test third party code.
 * @codeCoverageIgnore
 */
class DummyView implements View
{
    /**
     * @inheritDoc
     */
    public function render()
    {
        return 'dummy_render';
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return 'dummy_name';
    }

    /**
     * @inheritDoc
     */
    public function with($key, $value = null)
    {
        return 'dummy_with';
    }

    /**
     * @inheritDoc
     */
    public function getData()
    {
        return 'dummy_get_data';
    }
}
