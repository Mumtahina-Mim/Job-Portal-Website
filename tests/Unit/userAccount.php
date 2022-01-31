<?php

namespace Tests\Unit;

use Tests\TestCase;


class userAccount extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function userAccount()
    {
        $response = $this->get('/userAccount');

        $response->assertStatus(500);
    }
}
