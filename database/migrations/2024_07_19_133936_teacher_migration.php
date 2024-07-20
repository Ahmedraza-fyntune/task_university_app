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
        if(!Schema::hasTable('TeacherMaster'))
        {
            Schema::create('TeacherMaster',function(Blueprint $table){
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('qualification');
                $table->timestamps();
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
        Schema::dropIfExists('TeacherMaster');
    }
};
