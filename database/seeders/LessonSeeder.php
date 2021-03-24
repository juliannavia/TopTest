<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::create([
            'title' => 'Lección 1',
            'description' => 'hola, esta leccion personalizada',
            'url' => 'https://drive.google.com/file/d/187QeNp-JIjHDx6fpApsbAxOvFJ0piCHY/preview',
            'section_id' => 1,
        ]);

        Lesson::create([
            'title' => 'Lección 2',
            'description' => 'hola, esta leccion personalizada',
            'url' => 'https://drive.google.com/file/d/1yKu7NPB1FT6jGH3R4JBI4roIj9cvUyJc/preview',
            'section_id' => 1,
        ]);

    }
}
