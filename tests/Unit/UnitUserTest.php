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

   
}
