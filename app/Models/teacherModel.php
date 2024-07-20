<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class teacherModel extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'teachermaster';
    protected $fillable = [
        'name','address','qualification',''
    ];
}
