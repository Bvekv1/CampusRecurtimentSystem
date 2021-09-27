<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class searchJob extends TestCase
{
    use databasemigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function searchJob(){
        $jobs = Job::where('Department',tech)->select();
        $this->addToAssertionCount(1);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
