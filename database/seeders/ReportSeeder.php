<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::create([
            'name' => 'Jaringan Mati',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eveniet delectus beatae quibusdam neque perferendis asperiores at nostrum ea magnam laboriosam necessitatibus veniam obcaecati nemo cupiditate voluptas? Assumenda, reiciendis nostrum.",
            'major_id' => "fe0dfba5-7dfa-49b6-9eb8-13d012a5eb16"
        ]);
        Report::create([
            'name' => 'Jaringan Lambat',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eveniet delectus beatae quibusdam neque perferendis asperiores at nostrum ea magnam laboriosam necessitatibus veniam obcaecati nemo cupiditate voluptas? Assumenda, reiciendis nostrum.",
            'major_id' => "6f3508a7-7d3c-4494-9201-f1d2cdbc8fa1"
        ]);
        Report::create([
            'name' => 'Tidak Bisa Terkoneksi',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eveniet delectus beatae quibusdam neque perferendis asperiores at nostrum ea magnam laboriosam necessitatibus veniam obcaecati nemo cupiditate voluptas? Assumenda, reiciendis nostrum.",
            'major_id' => "6f3508a7-7d3c-4494-9201-f1d2cdbc8fa1"
        ]);
        Report::create([
            'name' => 'Jaringan Mati',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eveniet delectus beatae quibusdam neque perferendis asperiores at nostrum ea magnam laboriosam necessitatibus veniam obcaecati nemo cupiditate voluptas? Assumenda, reiciendis nostrum.",
            'major_id' => "6f3508a7-7d3c-4494-9201-f1d2cdbc8fa1"
        ]);
        Report::create([
            'name' => 'Lambat',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eveniet delectus beatae quibusdam neque perferendis asperiores at nostrum ea magnam laboriosam necessitatibus veniam obcaecati nemo cupiditate voluptas? Assumenda, reiciendis nostrum.",
            'major_id' => "6f3508a7-7d3c-4494-9201-f1d2cdbc8fa1"
        ]);
        Report::create([
            'name' => 'Tidak ada koneksi internet',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, eveniet delectus beatae quibusdam neque perferendis asperiores at nostrum ea magnam laboriosam necessitatibus veniam obcaecati nemo cupiditate voluptas? Assumenda, reiciendis nostrum.",
            'major_id' => "6f3508a7-7d3c-4494-9201-f1d2cdbc8fa1"
        ]);
    }
}
