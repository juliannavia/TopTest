<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Section;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'title' => 'Sección 1',
            'course_id' => 1,
        ]);

        Section::create([
            'title' => 'Sección 2',
            'course_id' => 1,
        ]);

        Section::create([
            'title' => 'Sección 3',
            'course_id' => 1,
        ]);

        Section::create([
            'title' => 'Sección 4',
            'course_id' => 1,
        ]);
    }
}
