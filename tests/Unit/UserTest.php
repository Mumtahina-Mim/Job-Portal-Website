<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_company_create()
    {
        $response = $this->get('company/create');
        $response->assertStatus(404);
    }
}
