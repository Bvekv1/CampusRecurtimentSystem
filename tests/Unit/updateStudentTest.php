<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class updateStudentTest extends TestCase
{
    use databasemigrations;
    public function updateStudent(){
        $students = array(
            'name' => 'Phoenix',
            'email'=> 'phoenix@gmail.com'
      );
        $students::where('id',1)->update($Student);
        $this->addToAssertionCount(1);
    } 

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
