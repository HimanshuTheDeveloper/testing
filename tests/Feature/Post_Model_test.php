<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Post_Model_test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_assert_data_into_database()
    {
        $post = Post::factory()->create();

        $response = $this->actingAs($post) ->get('/');

        $response->assertStatus(200);
    }
}
