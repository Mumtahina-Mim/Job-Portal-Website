<?php

namespace Tests\Unit;

use Tests\TestCase;


class dashboard extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function dashboard()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(500);
    }
}
