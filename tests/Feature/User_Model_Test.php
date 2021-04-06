<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Tests\TestCase;

class User_Model_Test extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_username_equals_to_generated_data()
    {
       
        $user = User::factory()->create(
            [
            'name' => 'Himanshu Singh',
            'email' => 'newEmail@gmail.com'
            ]
        ); 
    
        $this->assertEquals('Himanshu Singh',$user->fullname);     
    }
}
