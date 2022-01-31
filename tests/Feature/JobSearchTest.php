<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobSearchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_job_search()
    {
        $response = $this->get('/search');

        $response->assertStatus(200);
    }
}
