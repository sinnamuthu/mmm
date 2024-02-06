<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createInstructor extends Model
{
    protected $table ='createinstructor';
    protected $primaryKey='instructor_id';
    protected $fillable=[
        'ins_fname',
        'ins_lname',
        'ins_mailid',
        'ins_pass',
        'ins_mob',
        'ins_intname',
        'ins_imstqua',
        'ins_bdescription',
        'instructor_image',
    ];
    use HasFactory;
}
