<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder {
    public function run()
    {
        Lesson::create([
            'module_id' => 1,
            'title' => 'Boas-vindas ao curso',
            'description' => 'Primeira aula do curso.',
            'video_url' => 'http://localhost/edusustentavel/video1.mp4',
            'order' => 1,
        ]);
        Lesson::create([
            'module_id' => 2,
            'title' => 'Primeira Aula',
            'description' => 'Como criar um sistema do zero.',
            'video_url' => 'http://localhost/edusustentavel/video2.mp4',
            'order' => 1,
        ]);
    }
}