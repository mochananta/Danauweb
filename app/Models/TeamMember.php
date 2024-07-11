<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $table = 'team_members'; // Pastikan ini sesuai dengan nama tabel Anda

    protected $fillable = [
        'name',
        'position',
        'image',
    ];
}

