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
/*<<<<<<< HEAD

        $user = User::create(array(
			'username' => 'admin2',
			'name' => 'Admin2 Admin',
			'email' => 'admin2@admin',
			'password' => Hash::make('admin2')
			));
        $userrole = UserRole::create(array(

        	))
=======
        DB::table('stations')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
>>>>>>> f5d11442f640de664aebd3c8962cc91e2c0d40b7*/
    }
}
