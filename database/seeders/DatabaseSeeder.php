<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder 
{
    public function run(): void
    {
        
        $dosen = Role::firstOrCreate(['name' => 'dosen']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $superAdmin = Role::firstOrCreate(['name' => 'super admin']);

        $akunDosen = User::create([
            'name' => 'Dosen Kalkulus',
            'email' => 'dosen@kalkulus.com',
            'password' => Hash::make('password123'),
        ]);
        $akunDosen->assignRole($dosen);

        $akunAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $akunAdmin->assignRole($admin);
    }
}