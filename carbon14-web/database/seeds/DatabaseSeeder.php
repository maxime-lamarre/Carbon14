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
            'is_admin' => '0',
            'password' => bcrypt('admin'),
            'contact_info' => 'user@la.fr',
            'email' => 'admin@la.fr']
            ['firstname' => 'admin',
            'lastname' => 'admin',
            'title' => 'developper',
            'is_admin' => '1',
            'password' => bcrypt('admin'),
            'contact_info' => 'admin@la.fr',
            'email' => 'admin@la.fr']
        ]);
        
    }
}
