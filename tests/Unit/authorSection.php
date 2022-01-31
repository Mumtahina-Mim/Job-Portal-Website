<?php

namespace Tests\Unit;

use Tests\TestCase;


class authorSection extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function authorSection()
    {
        $response = $this->get('/authorSection');

        $response->assertStatus(500);
    }
}
