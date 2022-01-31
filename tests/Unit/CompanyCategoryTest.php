<?php

namespace Tests\Unit;

use Tests\TestCase;

class CompanyCategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_company_catagory_store()
    {
        $response = $this->call('POST','/category',[
            'category_name' => 'softwer engineering'
        ]);

        $response->assertStatus($response->status(),200);
    }
}
