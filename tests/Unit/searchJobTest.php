<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class searchJobTest extends TestCase
{
    use databasemigrations;
    public function searchJobTest(){
        $jobs = Job::where('Department',tech)->select();
        $this->addToAssertionCount(1);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
