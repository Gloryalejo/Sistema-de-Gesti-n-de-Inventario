<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->id = 1;
        $user->name = 'Admin';
        $user->last_name = 'Admin';
        $user->email = 'admin@admin.com';
        $user->password = Hash::make('password');
        $user->save();
    }
}
