<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreamMaster extends Model
{
    use HasFactory;
    protected $table = 'streammaster';
    protected $fillable = ['name'];
}
