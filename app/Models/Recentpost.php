<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recentpost extends Model
{
    use HasFactory;
    protected $table = 'recentposts';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
