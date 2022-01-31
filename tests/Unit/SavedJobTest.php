<?php

namespace Tests\Unit;

use Tests\TestCase;

class SavedJobTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_saved_job()
    {
        $response = $this->call('POST','/cmy-saved-jobs/{id}',[
        ]);

        $response->assertStatus($response->status(),200);
    }
}
