<?php

namespace Tests\Unit;

use Tests\TestCase;


class becomeEmployer extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function becomeEmployer()
    {
        $response = $this->get('/becomeEmployer');

        $response->assertStatus(500);
    }
}
