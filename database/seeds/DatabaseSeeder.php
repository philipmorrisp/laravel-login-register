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
            'name' => 'admin',
            'email' =>  'admin@example.com',
            'password' => bcrypt('123456'),
            'mobile' => '92740123',
            'date_of_birth' => '1932-01-01'
        ]);
    }
}
