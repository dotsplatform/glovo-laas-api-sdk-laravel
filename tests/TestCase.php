<?php
/**
 * Description of TestCase.php
 * @copyright Copyright (c) DOTSPLATFORM, LLC
 * @author    Yehor Herasymchuk <yehor@dotsplatform.com>
 */

namespace Tests;

use Dots\Glovo\Laas\GlovoLaasServiceProvider;
use Illuminate\Support\Str;
use Orchestra\Testbench\TestCase as LaravelTestCase;

abstract class TestCase extends LaravelTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            GlovoLaasServiceProvider::class,
        ];
    }

    protected function uuid(): string
    {
        return Str::uuid()->__toString();
    }
}
