<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Role
        $roleSuperAdmin = Role::create(['name' => 'super admin']);
        $roleDosen = Role::create(['name' => 'dosen']);
        $roleMahasiswa = Role::create(['name' => 'mahasiswa']);

        // 2. Buat satu user untuk dijadikan Super Admin langsung sebagai contoh
        $admin = User::create([
            'name' => 'Abimanyu Super Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123') // Sesuaikan password
        ]);
        $admin->assignRole('super admin');

        // 3. Buat contoh user Dosen
        $dosen = User::create([
            'name' => 'Bapak Dosen',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('password123')
        ]);
        $dosen->assignRole('dosen');
    }
}