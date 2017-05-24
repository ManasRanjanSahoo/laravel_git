<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post')->insert([
        	'category_id'=>'2',
        	'sub_category_id'=>'1',
        	'author_name'=>'Manas Sahoo',
        	'user_id'=>'1',
        	'title'=>'My Second Post',
        	'description'=>'Description on second post goes here...'
        	]);
    }
}
