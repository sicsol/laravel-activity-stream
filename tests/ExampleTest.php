<?php

namespace Sicsol\LaravelActivityStream\Tests;

use Orchestra\Testbench\TestCase;
use Sicsol\LaravelActivityStream\LaravelActivityStreamServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelActivityStreamServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
