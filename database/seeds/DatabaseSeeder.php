<?php

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
        // $this->call(UsersTableSeeder::class);
	    $this->call([
                UsersDB::class,
	    		EventsDB::class,
			    GalleryDB::class,
			    TeamDB::class,
			    CertificatesDB::class,
			    RegisterationDB::class,
			    CoursesDB::class
	    ]);
    }
}
