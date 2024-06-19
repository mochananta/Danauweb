<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'photo', 'role_id'
    ];

    public function role()
    {
        return $this->belongsTo(role::class);
    }
}
