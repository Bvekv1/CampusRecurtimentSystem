<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * 
     * 
     */
     public function addstudentTest(){
         $students = Student::create([
             'name' => 'Hari',
             'email' => 'hari@gmail.com',
             'password'=>'12345',
         ]);
         $this->addToAssertionCount(1);

     }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
