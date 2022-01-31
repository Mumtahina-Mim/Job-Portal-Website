<?php

namespace Tests\Unit;

use Tests\TestCase;

class PostJobTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_post_create()
    {
        $response = $this->call('POST','post',[
            'job_title' => 'web engineering',
            'job_level' => 'Fresher',
            'vacancy_count' => '2',
            'employment_type' => 'Intern',
            'job_location' => 'savar',
            'salary' => '8k',
            'deadline' => '02-02-2022',
            'education_level' => 'B.Sc in cse',
            'experience' => 'No',
            'skills' => 'html,css,js',
            'specifications' => 'nothing',
        ]);

        $response->assertStatus($response->status(),200);
    }
}
