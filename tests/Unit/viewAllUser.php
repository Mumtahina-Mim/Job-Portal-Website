<?php

namespace Tests\Unit;

use Tests\TestCase;

class viewAllUser extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function viewAllUser()
    {
        $response = $this->get('/viewAllUser');

        $response->assertStatus(500);
    }
}
