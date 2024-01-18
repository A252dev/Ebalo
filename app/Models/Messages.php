<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    public $timestamps = true;
    protected $fillable = [
        'from_user',
        'to_user',
        'message',
        'created_at',
        'updated_at',
    ];
}
