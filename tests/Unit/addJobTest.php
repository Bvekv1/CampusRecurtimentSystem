<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class addJobTest extends TestCase
{
    use databasemigrations;
    public function addJobTest(){
        $Job= Job::create([
            'JobRole' => 'Developer',
            'PositionLevel'=> 'Junior',
            'Department' => '123456789',
            'Location' => 'bardiya',
            'Skills' =>'java',
            'Salary'=>'5000',
            'CompanyUserId'=>'1'
            ]);
        $this->addToAssertionCount(1);
    }


    public function testExample()
    {
        $this->assertTrue(true);
    }
}
