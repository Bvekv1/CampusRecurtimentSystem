<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class updateJobTest extends TestCase
{
    use databasemigrations;
    public function updateJobTest(){
        $jobs = array(
            'JobRole' => 'Accountant',
            'PositionLevel'=> 'Junior',
            'Department' => '123456789',
            'Location' => 'Kathamndu',
            'Skills' =>'accounting',
            'Salary'=>'4000',
            'CompanyUserId'=>'1'
      );
        $students::where('id',1)->update($Student);
        $this->addToAssertionCount(1);
    } 


    public function testExample()
    {
        $this->assertTrue(true);
    }
}
