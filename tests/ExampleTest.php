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
            $this->visit('/')
        // Press the Click Me Link
            ->click('Click Me')
        // See "You have been clicked."
            ->see("You have been clicked.")
        // Assert that the current url is /feedback
            ->seePageIs('/feedback');
    }
}
