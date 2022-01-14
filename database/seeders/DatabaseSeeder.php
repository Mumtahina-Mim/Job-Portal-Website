<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
      \App\Models\User::factory(10)->create();
      \App\Models\Company::factory(10)->create();
      \App\Models\JOb::factory(10)->create();
       
        
        $categories = [

            'Technology',
            'Engineering',
            'Government',
            'Medical',
            'Construction',
            'Software'

        ];
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }
    }
}
