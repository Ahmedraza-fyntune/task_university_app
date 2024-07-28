<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        if(!Schema::hasTable('StudentMaster'))
        {
            Schema::create('StudentMaster',function(Blueprint $table)
            {
                $table->id();
                $table->string('fname');
                $table->string('lname');
                $table->string('email');
                $table->string('Contact',20);
                $table->string('dob');
                $table->enum('gender',['F','M']);
                $table->string('address');
                $table->integer('teacher_id');
                $table->string("stream");
                $table->timestamps();
                $table->string('academicYears');
                $table->softDeletes();

            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('StudentMaster');
    }
};
