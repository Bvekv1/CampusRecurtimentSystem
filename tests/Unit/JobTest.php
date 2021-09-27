<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function addJob(){
        $Job= Job::create([
            'name' => 'James',
            'email'=> 'james@gmail.com',
            'password' => '123456789'

        ]);
        $this->addToAssertionCount(1);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
