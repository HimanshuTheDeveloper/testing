<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       
        $user = User::factory()->create([
            'name' => 'NewData',
            'email' => 'newEmail@gmail.com'
            ]);
        // $response = $this->actingAs($user) ->get('/');
        // $response->assertStatus(200);
        $this->assertEquals('newEmail@gmail.com',$user->email);
    }
 
}
