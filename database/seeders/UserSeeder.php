<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "username" => "admin",
            "email" => "admin@localhost",
            "password" => Hash::make("admin"),
            "fullname" => "Administrator",
            "phone" => "081234567890",
        ]);
    }
}
