<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       
        $user = User::factory()->create(
            [
            'name' => 'Himanshu Singh',
            'email' => 'newEmail@gmail.com'
            ]
        );
    //     $response = $this->actingAs($user) ->get('/');
    //    $response->assertStatus(200);
       
        $this->assertEquals('Himanshu Singh',$user->fullname);

       
    }
 
}
