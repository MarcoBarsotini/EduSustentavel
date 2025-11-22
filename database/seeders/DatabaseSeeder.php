<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        // $this->call(UserSeeder::class);  // isso aqui é so pra criar usuarios, ignora por enquanto
        $this->call(CourseSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(LessonSeeder::class);
    }
}
