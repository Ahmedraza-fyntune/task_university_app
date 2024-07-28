<?php

namespace Database\Seeders;

use App\Models\StreamMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StreamMasterMigration extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::statement('alter table streammaster AUTO_INCREMENT = 1');
        StreamMaster::insert([

            ['name' => 'Computer Science'],
            ['name' => 'Information Technology'],
            ['name' => 'Mathematics'],
            ['name' => 'Bachelors in Biotechnology'],
            ['name' => 'Bachelors in Engineering'],
            ['name' => 'Bachelors in Management'],
            ['name' => "Masters in Biotechnology"],
            ['name' => "Masters in Engineering"],
            ['name' => "Masters in Management"],
            ['name' => "PhD in Biotechnology"],
            ['name' => "PhD in Engineering"],
            ['name' => "PhD in Management"],
        ]);
    }
}
