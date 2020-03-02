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
    		'password' => bcrypt('/lB$(V!8);x%(%u'),
    		'admin' => 1
    	]);

    	User::create([
    		'name' => 'Media',
    		'username' => 'media',
    		'email' => 'media@media.com',
    		'password' => bcrypt('0McgS>nhruRcX/e'),
    		'admin' => 2
    	]);

    	User::create([
    		'name' => 'Registeration',
    		'username' => 'registeration',
    		'email' => 'reg@registeration.com',
    		'password' => bcrypt('ju{ix@MlM7Nhquh'),
    		'admin' => 3
    	]);
        
    }
}
