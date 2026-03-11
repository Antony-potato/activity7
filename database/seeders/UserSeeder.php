<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Insertar los roles requeridos
        DB::table('roles')->insert([
            ['name' => 'Administrative'],
            ['name' => 'Teacher'],
            ['name' => 'Student'],
        ]);

        // 2. Insertar los 3 usuarios que pide la tarea
        DB::table('users')->insert([
            [
                'name' => 'Admon', 
                'email' => 'admon@robotics.com', 
                'password' => Hash::make('Adm@2022'), 
                'role_id' => 1 // Administrative
            ],
            [
                'name' => 'Tecmilenio', 
                'email' => 'tecmilenio@robotics.com', 
                'password' => Hash::make('Adm@2022'), 
                'role_id' => 2 // Teacher
            ],
            [
                'name' => 'Student', 
                'email' => 'student@robotics.com', 
                'password' => Hash::make('Adm@2022'), 
                'role_id' => 3 // Student
            ],
        ]);
    }
}