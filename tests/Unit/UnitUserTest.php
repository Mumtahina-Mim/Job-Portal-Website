<?php

namespace Tests\Unit;

use Tests\TestCase;

class UnitUserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_index()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_post_post_show()
    {
        $response = $this->get('/job/{job}');
        $response->assertStatus(404);
    }

    public function test_post_post_create()
    {
        $response = $this->get('/post/create');
        $response->assertStatus(404);
    }
   
    public function test_post_post_store()
    {
        $response = $this->post('/post');
        $response->assertStatus(404);
    }

    public function test_post_post_edit()
    {
        $response = $this->get('/post/{post}/edit');
        $response->assertStatus(404);
    }

    public function test_post_post_update()
    {
        $response = $this->put('post/{post}');
        $response->assertStatus(404);
    }
    
    public function test_post_post_delete()
    {
        $response = $this->delete('post/{post}');
        $response->assertStatus(404);
    }
}
