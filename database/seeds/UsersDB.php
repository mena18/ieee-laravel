<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::create([
    		'name' => 'Board',
    		'username' => 'board',
    		'email' => 'board@board.com',
    		'password' => bcrypt('Nifk#u@PZ(E7Oje'),
    		'admin' => 1
    	]);

    	User::create([
    		'name' => 'Media',
    		'username' => 'media',
    		'email' => 'media@media.com',
    		'password' => bcrypt('aMw)idUN(WxDqCY'),
    		'admin' => 2
    	]);

    	User::create([
    		'name' => 'Registeration',
    		'username' => 'registeration',
    		'email' => 'reg@registeration.com',
    		'password' => bcrypt('dcL87v9hC#(%Hk!'),
    		'admin' => 3
    	]);

    }
}
