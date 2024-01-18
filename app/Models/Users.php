<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'login',
        'password',
        'avatar_url',
        'status',
        'created_at',
        'updated_at',
    ];
}
