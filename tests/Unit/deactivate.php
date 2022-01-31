<?php

namespace Tests\Unit;

use Tests\TestCase;


class deactivate extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function deactivate()
    {
        $response = $this->get('/deactivate');

        $response->assertStatus(500);
    }
}
