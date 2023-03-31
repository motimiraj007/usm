<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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
         \App\Models\User::factory(30)->create();
         User::factory()->create([
             'name' => 'Admin',
             'username' => 'admin@123',
             'password' => '1234',
             'email' => 'admin@gmail.com',
             'is_admin' => 1,
         ]);
    }
}
