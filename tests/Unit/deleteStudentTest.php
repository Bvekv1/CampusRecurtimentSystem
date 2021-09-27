<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class deleteStudentTest extends TestCase
{
    use databasemigrations;
    public function deleteStudent(){
        $students=Student::where('id',1)->delete();
        $this->addToAssertionCount(1);
    }

    public function testExample()
    {
        $this->assertTrue(true);
    }
}
