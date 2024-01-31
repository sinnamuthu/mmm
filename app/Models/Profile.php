<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'adminprofile';
    protected $primarykey = 'id';
    protected $fillable =[
        'hospitalname',
        'email',
        'phoneNumber',
        'type',
        'status',
        'password',
    ];
    use HasFactory;
}
