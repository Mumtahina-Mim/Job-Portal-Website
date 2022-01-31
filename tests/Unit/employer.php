<?php

namespace Tests\Unit;

use Tests\TestCase;


class employer extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function employer()
    {
        $response = $this->get('/employer');

        $response->assertStatus(500);
    }
}
