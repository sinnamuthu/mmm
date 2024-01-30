<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creatcourse extends Model
{
    protected $table = 'createcourse';
    protected $primarykey = 'course_id';
    protected $fillable =[
        'course_title',
        'course_instructor',
        'course_batch',
        'course_description',
        'course_modal',
        'course_image',
    ];
    use HasFactory;
}
