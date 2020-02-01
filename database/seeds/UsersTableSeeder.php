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
			$superAdmin= App\User::create([
					 'name' => 'fatma',
					 'email' => 'admin@app.com',
					 'password' => bcrypt('12345678'),
			 ]);
				$superAdmin->attachRole('super_admin');


    }
}
