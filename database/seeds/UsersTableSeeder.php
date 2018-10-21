<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Dustin',
            	'email' => 'dustingassmann@gmail.com',
            	'password' => bcrypt('123456'),
            ),
            1 => 
            array (
                'name' => 'Emanuel',
            	'email' => str_random(10).'@gmail.com',
            	'password' => bcrypt('123456'),
            ),
            2 => 
            array (
                'name' => 'Jorge',
            	'email' => str_random(10).'@gmail.com',
            	'password' => bcrypt('123456'),
            ),
            3 => 
            array (
                'name' => 'Raul',
            	'email' => str_random(10).'@gmail.com',
            	'password' => bcrypt('123456'),
            ),
            4 => 
            array (
                'name' => 'Juan',
            	'email' => str_random(10).'@gmail.com',
            	'password' => bcrypt('123456'),
            ),
        ));
    }
}
