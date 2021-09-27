<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\Databasemigrations;
class addApplicationsTest extends TestCase
{
    use databasemigrations;
    public function addApplicationsTest(){
        $applications= Application::create([
            'name' => 'Manish',
            'email'=> 'manish@gmail.com',
            'companyUserId'=> '1'

        ]);
        $this->addToAssertionCount(1);
    }
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
