<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    public function run(): void
    {
        
        $superAdmin = Role::create(['name' => 'super admin']);
        $dosen = Role::create(['name' => 'dosen']);
        $user = Role::create(['name' => 'user']);

        $akunDosen = User::create([
            'name' => 'Dosen Kalkulus',
            'email' => 'dosen@kalkulus.com',
            'password' => Hash::make('password123'),
        ]);
        $akunDosen->assignRole($dosen);

        $akunMahasiswa = User::create([
            'name' => 'Budi Mahasiswa',
            'email' => 'budi@mahasiswa.com',
            'password' => Hash::make('password123'),
        ]);
        $akunMahasiswa->assignRole($user);
    }
}