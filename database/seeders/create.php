<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class create extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 100; $i++) { 
         DB::table('tasks')->insert([

            'title' =>Str::random(10),
            'discription' =>Str::random(100),



         ]);
      }
    }
}
