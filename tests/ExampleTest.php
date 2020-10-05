<?php

namespace Responseams\Base\Tests;

use Orchestra\Testbench\TestCase;
use Responseams\Base\BaseServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BaseServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
