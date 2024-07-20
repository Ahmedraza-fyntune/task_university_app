<?php

namespace Database\Seeders;

use App\Models\teacherModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        teacherModel::factory(10)->create();
    }
}