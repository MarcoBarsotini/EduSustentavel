<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder {
    public function run()
    {
        Module::create([
            'course_id' => 1,
            'title' => 'Módulo 1: Introdução',
            'order' => 1,
        ]);
    }
}
