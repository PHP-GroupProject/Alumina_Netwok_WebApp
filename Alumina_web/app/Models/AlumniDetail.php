<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniDetail extends Model
{
    use HasFactory;
    protected $table="alumni_details" ;

    protected $fillable = [
        'availability',
        'birthdate',
        'country',
        'age',
        'city',
        'workplace',
     
    ];
}
