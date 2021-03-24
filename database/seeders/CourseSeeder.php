<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Course;

use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'title' => 'Curso 1',
            'description' => 'Hola!, soy un curso de prueba de la plataforma Top Trading!',
            'user_id' => 1,
        ]);
    }
}
