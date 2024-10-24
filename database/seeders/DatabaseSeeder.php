<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() : void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Administrador',
            'email'=>'admin@utn.edu.ec',
            'password'=>Hash::make(value:'12345678')
        ]);

        User::create([
            'name'=>'Estudiante 1',
            'email'=>'estudiante1@utn.edu.ec',
            'password'=>Hash::make(value:'12345678')
        ]);

        User::create([
            'name'=>'Estudiante 2',
            'email'=>'estudiante2@utn.edu.ec',
            'password'=>Hash::make(value:'12345678')
        ]);

        User::create([
            'name'=>'Estudiante 3',
            'email'=>'estudiante3@utn.edu.ec',
            'password'=>Hash::make(value:'12345678')
        ]);

        User::create([
            'name' => 'Estudiante 4',
            'email' => 'estudiante4@utn.edu.ec',
            'password' => Hash::make(value:'12345678')
        ]);
    }
}
