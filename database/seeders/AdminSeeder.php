<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            "name" => "Admin",
            "email" => "admin@example.com",
            "email_verified_at" => date('Y-m-d h:i:s'),
            "password" => Hash::make('admin@123'),
            "remember_token" => Str::random(80)
        ]);
    }
}
