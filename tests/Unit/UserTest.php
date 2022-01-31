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

    public function test_company_update()
    {
        $response = $this->put('company/{id}');
        $response->assertStatus(404);
    }

    public function test_company_store()
    {
        $response = $this->post('company');
        $response->assertStatus(404);
    }

    
    public function test_company_edit()
    {
        $response = $this->get('company/edit');
        $response->assertStatus(404);
    }

    public function test_company_destroy()
    {
        $response = $this->delete('company');
        $response->assertStatus(404);
    }

    public function test_company_category_store()
    {
        $response = $this->post('category');
        $response->assertStatus(404);
    }

    public function test_company_category_edit()
    {
        $response = $this->get('category/{category}/edit');
        $response->assertStatus(404);
    }
}
