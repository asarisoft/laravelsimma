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
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('P@ssw0rd123'),
            ],
        ]);
    }
}
