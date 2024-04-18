<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FirstUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Joe Lohr',
            'slug' => 'lohr',
            'email' => 'emailme@joelohr.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
