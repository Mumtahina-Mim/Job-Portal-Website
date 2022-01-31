<?php

namespace Tests\Unit;

use Tests\TestCase;


class changePassword extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function changePassword()
    {
        $response = $this->get('/changePassword');

        $response->assertStatus(500);
    }
}
