<?php

namespace App\Tests;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Topic;
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
      // $topic = factory(Topic::class)->create();

        $this->visit('/admin/topics/create');

    }
}
