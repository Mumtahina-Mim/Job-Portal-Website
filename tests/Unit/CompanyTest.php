<?php

namespace Tests\Unit;

use Tests\TestCase;

class CompanyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_company_store()
    {

        $response = $this->call('POST','/company',[
            'title' => 'robi',
            'description' => 'this is a mobile telecome',
            'logo' => '\public\images\logo\1.png',
            'category' => 'It ',
            'website' => 'www.robi.com',
            'cover_img' => '\public\images\companies\nocover.jpg'
        ]);

        $response->assertStatus($response->status(),200);
    }
}
