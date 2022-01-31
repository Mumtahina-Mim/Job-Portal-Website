<?php

namespace Tests\Unit;

use Tests\TestCase;


class savedJob extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function savedJob()
    {
        $response = $this->get('/savedJob');

        $response->assertStatus(500);
    }
}
