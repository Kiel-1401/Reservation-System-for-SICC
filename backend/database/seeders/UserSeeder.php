<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {

            $registrarRole = Role::firstOrCreate(['name' => 'Registrar']);
            $staffRole = Role::firstOrCreate(['name' => 'Staff']);
            $studentRole = Role::firstOrCreate(['name' => 'Student']);

    
            // You can add more users as needed
            User::create([
                'name' => 'Registrar',
                'email' => 'registrar@example.com',
                'password' => Hash::make('password123'),
                'role_id' => $registrarRole->id,
            ]);
    
            User::create([
                'name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('password123'),
                'role_id' => $staffRole->id,
            ]);

            User::create([
                'name' => 'Staff 2',
                'email' => 'staff2@gmail.com',
                'password' => Hash::make('password123'),
                'role_id' => $staffRole->id,
            ]);
    
            User::create([
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'password' => Hash::make('password123'),
                'role_id' => $studentRole->id,

            ]);
        }
    }
}
