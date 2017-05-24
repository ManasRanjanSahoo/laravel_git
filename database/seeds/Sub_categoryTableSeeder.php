<?php

use Illuminate\Database\Seeder;

class Sub_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('sub_category')->insert([
        	'category_id'=>'2',
        	'sub_name'=>'Car'
        	]);
    }
}
