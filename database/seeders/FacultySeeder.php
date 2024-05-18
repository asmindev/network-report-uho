<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::create([
            'name' => 'Teknik',

        ]);

        Faculty::create([
            'name' => 'Manajemen',

        ]);

        Faculty::create([
            'name' => 'Kedokteran',

        ]);
    }
}
