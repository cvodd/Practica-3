<?php

namespace Database\Seeders;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesSeede extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Crear un perfil de ejemplo
     /*$profile = Profile::create([
            'name' => 'ejemplo',
            'lastname' => 'test',
            'email' => 'ejemplo@test.com',
            'city' => 'Antofagasta',
            'country' => 'Chile',
            'summary' => 'Mucho texto.',
            'frameworks' => [
                ['name' => 'Laravel', 'level' => 'intermedio', 'year' => 2018],
                ['name' => 'React', 'level' => 'principiante', 'year' => 2020],
            ],
            'hobbies' => [
                ['name' => 'leer', 'description' => 'novelas de fantasía'],
                ['name' => 'jugar', 'description' => 'juegos tipo RPG'],
            ],
        ]);*/

        Profile::create([
            'name' => 'ejemplo1',
            'lastname' => 'test',
            'email' => 'ejemplo1@test.com',
            'city' => 'Antofagasta',
            'country' => 'Chile',
            'summary' => 'Mucho texto.',
            'frameworks' => [
                ['name' => 'Laravel', 'level' => 'intermedio', 'year' => 2018],
                ['name' => 'React', 'level' => 'principiante', 'year' => 2020],
            ],
            'hobbies' => [
                ['name' => 'leer', 'description' => 'novelas de fantasía'],
                ['name' => 'jugar', 'description' => 'juegos tipo RPG'],
            ],
        ]);
        Profile::create([
            'name' => 'ejemplo2',
            'lastname' => 'test',
            'email' => 'ejemplo2@test.com',
            'city' => 'Antofagasta',
            'country' => 'Chile',
            'summary' => 'Mucho texto.',
            'frameworks' => [
                ['name' => 'Laravel', 'level' => 'intermedio', 'year' => 2018],
                ['name' => 'React', 'level' => 'principiante', 'year' => 2020],
            ],
            'hobbies' => [
                ['name' => 'leer', 'description' => 'novelas de fantasía'],
                ['name' => 'jugar', 'description' => 'juegos tipo RPG'],
            ],
        ]);
       // Profile::create($profile);
    }
}
