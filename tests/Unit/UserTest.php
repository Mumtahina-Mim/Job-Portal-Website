<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Company;
use App\Models\CompanyCategory;
use Illuminate\Http\Request;

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
        Storage::delete('public/companies/logos/' . basename(auth()->user()->company->logo));
        if (auth()->user()->company->delete()) {
            return redirect()->route('account.authorSection');
        }
        return redirect()->route('account.authorSection');
    }

    public function test_company_category_store()
    {
        $response = $this->post('category');
        $response->assertStatus(404);
    }

    public function test_company_category_update()
    {
        $response = $this->put('category/{id}');
        $response->assertStatus(404);
    }

    public function test_company_category_edit()
    {
        $response = $this->get('category/{category}/edit');
        $response->assertStatus(404);
    }

    public function test_company_category_destroy()
    {
        $response = $this->delete('category/{id}');
        $response->assertStatus(404);
    }
}
