<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class Blogtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        foreach(Range(1,40) as $index)
        DB::table('blog')->insert([

        'title'=>$faker->sentence(1),
        'short_description'=>$faker->sentence(3),
        'long_description'=>$faker->paragraph(5,true),
        'date'=>$faker->date,
       'image' => 'https://loremflickr.com/640/480/business/all',
        ]);










    }
}

