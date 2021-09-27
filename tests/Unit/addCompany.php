<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class addCompany extends TestCase
{
    use databasemigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */

     public function addComapnyTest(){
         $companies = Company::create([
             'name'=> 'Hitesh',
             'email'=> 'hitesh@gmail.com',
             'password'=> '123456789'
         ]);
         $this->addToAssertionCount(1);
     }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
