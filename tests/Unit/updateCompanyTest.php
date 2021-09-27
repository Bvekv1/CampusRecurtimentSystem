<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class updateCompanyTest extends TestCase
{
    use databasemigrations;
     public function updateCompanyTest(){
         $companies = array(
          'name' => 'Sanket',
          'email'=> 'sanket@gmail.com'
         );
         $companies::where('id',1)->update($companies);
         $this->addToAssertionCount(1);
     }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
