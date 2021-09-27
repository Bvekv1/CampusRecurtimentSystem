<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class deleteCompanyTest extends TestCase
{
    use databasemigrations;
    public function deleteComapnyTest(){
       $companies=Company::where('id',1)->delete();
        $this->addToAssertionCount(1);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
