<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $user = User::create(array(
			'username' => 'admin2',
			'name' => 'Admin2 Admin',
			'email' => 'admin2@admin',
			'password' => Hash::make('admin2')
			));
        $userrole = UserRole::create(array(

        	))
    }
}
