<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class studentModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'studentmaster';
    protected $fillable = [
        'fname','lname','email','Contact','dob','gender','address','teacher_id','stream','academicYears'
    ];

}

