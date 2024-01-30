<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'coursewatch';
    protected $primarykey = 'coursewatch_id';
    protected $fillable =[
        'course_time',
    ];
    use HasFactory;
}
