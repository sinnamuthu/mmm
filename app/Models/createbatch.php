<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createbatch extends Model
{
    protected $table ='createbatch';

    protected $primaryKey='batch_id';

    protected $fillable=[
        'bt_innertitle',
        'start_date',
        'end_date',
        'status',
    ];

    use HasFactory;
}
