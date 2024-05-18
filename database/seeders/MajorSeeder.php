<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Major::create([
            'name' => 'Teknik Informatika',
            "faculty_id" => 1
        ]);

        Major::create([
            'name' => 'Manajemen Informatika',
            "faculty_id" => 2
        ]);

        Major::create([
            'name' => 'Kedokteran Gigi',
        ]);
    }
}
