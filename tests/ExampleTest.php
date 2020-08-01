<?php

namespace Wulfheart\LaravelFileloquent\Tests;

use Orchestra\Testbench\TestCase;
use Wulfheart\LaravelFileloquent\LaravelFileloquentServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelFileloquentServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
