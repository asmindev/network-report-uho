<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Faculty;
use App\Models\Major;
use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faculties = [
            "Teknik",
            "Manajemen",
            "Akuntansi",
            "Pertanian",
            "Ilmu Komputer",
            "Hukum",
            "Perikanan",
            "Ilmu Budaya",
            "Psikologi",
            "Ilmu Sosial",
            "Peternakan",
            "Pariwisata",
            "Geografi",
        ];

        foreach ($faculties as $faculty) {
            Faculty::create([
                "name" => $faculty
            ]);
        }

        // make major relationship
        $faculties = Faculty::all();
        $majors = [
            "Teknik Informatika",
            "Manajemen",
            "Akuntansi",
            "Pertanian",
            "Ilmu Komputer",
            "Hukum",
            "Perikanan",
            "Ilmu Budaya",
            "Psikologi",
            "Ilmu Sosial",
            "Peternakan",
            "Pariwisata",
            "Geografi",
        ];

        foreach ($faculties as $key => $faculty) {
            $faculty->majors()->create([
                "name" => $majors[$key]
            ]);
        }

        // user admin
        User::create([
            "name" => "admin",
            "email" => "admin@mail.com",
            "password" => bcrypt("12345678"),
            "role" => "admin"
        ]);

        // user user relationship with major
        $majors = Major::all();
        foreach ($majors as $major) {
            User::create([
                "name" => $major->name,
                "email" => $major->name . "@user.com",
                "password" => bcrypt("12345678"),
                "role" => "user",
                "major_id" => $major->id
            ]);
        }

        // Report
        foreach ($majors as $major) {
            Report::create([
                "name" => $major->name,
                "description" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, reiciendis nulla. Repellat, consequuntur? Temporibus asperiores nisi saepe nobis atque exercitationem maiores assumenda architecto omnis? A, voluptatem! Vero cum accusantium facere incidunt architecto dolor perspiciatis possimus laboriosam tenetur. Eius, voluptatibus repellendus.",
                "major_id" => $major->id
            ]);
        }
    }
}
