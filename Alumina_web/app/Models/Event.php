<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'images', 'date', 'venue', 'keywords',
    ];

    protected $dates = [
        'date', // Specify 'date' field as a date attribute
    ];
}

