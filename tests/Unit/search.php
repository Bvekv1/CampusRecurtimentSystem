<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class search extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function search(){
        $jobs = JOb::where('Department',tech)->select();
        $this->addToAssertionCount(1);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
