<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Rivo',
            'email' => 'superadmin@roles.id',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Meri',
            'email' => 'admin@roles.id',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Fahri',
            'email' => 'operator@roles.id',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ]);
        $productManager->assignRole('Operator');
    }
}
