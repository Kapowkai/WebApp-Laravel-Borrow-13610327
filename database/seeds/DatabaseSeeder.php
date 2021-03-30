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
        \App\Admin::create([
            'name' =>'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
