<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'flavio araujo',
            'email' => 'flavio@email.com', 
            'password' => '123456',
            ]);
    }
}
