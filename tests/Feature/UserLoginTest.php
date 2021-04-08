<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_login()
    {
       
        $user = User::factory()->create();
        
        $response = $this->actingAs($user) ->get('/');
        
        $response->assertStatus(200);
       
    }
    
    public function user_has_age_attribute()
    {
        $user = User::factory()->make();
        $this->assertNotNull($user->age);
    }




}
