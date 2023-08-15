<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        $admin = User::create([
            'name' => "Admin",
            'number' => "089637885692",
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'profile_picture' => 'gambar1.png'
        ]);
        $admin->assignRole($role);
    }
}