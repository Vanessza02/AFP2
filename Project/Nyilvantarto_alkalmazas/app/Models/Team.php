<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class);
    }
}
