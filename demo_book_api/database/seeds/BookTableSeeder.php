<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<1000; $i++){
        	DB::table('books')->insert([
            'title' => str_random(10),
            'author' => str_random(10),
            
        ]);
        }
         
    }
}
