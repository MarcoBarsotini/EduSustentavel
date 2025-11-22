<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Course::create([
            'title' => 'Curso de Sustentabilidade',
            'description' => 'Curso para teste.',
            'thumbnail' => null
        ]);
    }
}
