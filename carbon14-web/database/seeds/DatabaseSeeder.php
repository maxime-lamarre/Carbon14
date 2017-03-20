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

        DB::table('users')->insert([
            ['firstname' => 'bertrand',
            'lastname' => 'bouge',
            'title' => 'developper',
            'user_role' => 'User',
            'password' => bcrypt('admin'),
            'contact_info' => 'admin@la.fr'],
            ['firstname' => 'ets',
            'lastname' => 'ets',
            'title' => 'developper',
            'user_role' => 'Admin',
            'password' => bcrypt('admin'),
            'contact_info' => 'admin@la.fr']
        ]);
        
    }
}
