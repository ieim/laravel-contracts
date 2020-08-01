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
     * @return string
     */
    public function render(): string
    {
        return 'dummy_render';
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'dummy_name';
    }

    /**
     * @param array|string $key
     * @param mixed|null $value
     * @return array|string
     */
    public function with($key, $value = null)
    {
        return 'dummy_with';
    }

    /**
     * @return array|string
     */
    public function getData()
    {
        return 'dummy_get_data';
    }
}
