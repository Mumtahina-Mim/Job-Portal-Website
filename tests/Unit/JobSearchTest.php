<?php

namespace Tests\Unit;

use Tests\TestCase;

class JobSearchTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_job_search()
    {
        $response = $this->call('POST','/search',[
            'job_title' => 'web engineering',
        ]);

        $response->assertStatus($response->status(),200);
    }
}
