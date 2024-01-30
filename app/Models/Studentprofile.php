<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentprofile extends Model
{
    protected $table = 'student';
    protected $primarykey = 'stud_id';
    protected $fillable =[
        'prf_salutation',
        'prf_fname',
        'prf_lname',
        'prf_email',
        'prf_pwd',
        'prf_gender',
        'prf_dob',
        'prf_add1',
        'prf_add2',
        'prf_city',
        'prf_pin',
        'prf_country',
        'prf_mobile',
        'prf_qualification',
        'prf_company',
        'prf_organ',
    ];
    use HasFactory;
}
