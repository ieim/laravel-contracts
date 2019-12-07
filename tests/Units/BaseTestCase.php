<?php declare(strict_types=1); // -*- coding: utf-8 -*-

namespace Ieim\LaravelContracts\Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
    use MockeryPHPUnitIntegration;
}
