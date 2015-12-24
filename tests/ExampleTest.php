<?php

namespace App\Tests;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /* ------------------------------------------------------------------------------------------------
     |  Tests Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * A basic functional test example.
     */
    public function testBasicExample()
    {
        // Visit the hompage
            $this->visit('/');
    }
}
