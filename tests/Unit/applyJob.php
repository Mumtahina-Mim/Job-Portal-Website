<?php

namespace Tests\Unit;

use Tests\TestCase;


class applyJob extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function applyJob()
    {
        $response = $this->get('/applyJob');

        $response->assertStatus(500);
    }
}
