<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class addStudent extends TestCase
{
    use databasemigrations;
    public function addStudent(){
        $students= Student::create([
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
