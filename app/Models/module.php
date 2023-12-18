<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tittle',
        'level',
        'question',
        'attempt',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function module()
    // {
    //     return $this->hasMany(module::class);
    // }
}
