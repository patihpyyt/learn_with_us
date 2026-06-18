<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Role dengan firstOrCreate agar tidak error jika sudah ada
        $roleSuperAdmin = Role::firstOrCreate(['name' => 'super admin']);
        $roleDosen = Role::firstOrCreate(['name' => 'dosen']);
        $roleMahasiswa = Role::firstOrCreate(['name' => 'mahasiswa']);

        // 2. Buat Admin jika belum ada
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Abimanyu Super Admin',
                'password' => bcrypt('password123')
            ]
        );
        $admin->assignRole('super admin');

        // 3. Buat Dosen jika belum ada
        $dosen = User::firstOrCreate(
            ['email' => 'dosen@gmail.com'],
            [
                'name' => 'Bapak Dosen',
                'password' => bcrypt('password123')
            ]
        );
        $dosen->assignRole('dosen');
    }
}