<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meeting extends Model
{
    use HasFactory;
    protected $fillable=[
        'Location',
        'Date',
        'Meeting name',
        'Participant name',
        'Participants number',
    ];
}
