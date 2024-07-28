<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherEducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('alter table teacher_edu_master AUTO_INCREMENT = 1');
        $edu_arr = [
            "Doctor of Philosophy",
            "Doctor of Medicine",
            "Doctor of Science",
            "Doctor of Engineering",
            "Doctor of Law",
            "Doctor of Commerce",
            "Master of Arts",
            "Master of Science",
            "Master of Engineering",
            "Master of Law",
            "Doctor of Education",
            "Doctor of Bussiness administration",
            "Doctor of Dental Surgery",
            "Doctor of Social Work",
            "Doctor of Theology"
        ];

        foreach ($edu_arr as $eduname) {
            $seed = DB::table('Teacher_Edu_master')->insert([
                'name' => $eduname
            ]);
        }
    }


}
