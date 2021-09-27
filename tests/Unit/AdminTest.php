<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Admin;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
class AdminTest extends TestCase
{
    use DatabaseMigrations;
    public function addAdmin(){
        $Admin= Admin::create([
            'name' => 'Phoenix',
            'email'=> 'phoenix@gmail.com',
            'password' => '123456789'
        ]);
        $this->addToAssertionCount(1);
    }
    
     

    public function testExample()
    {
        $this->assertTrue(true);
    }

}
