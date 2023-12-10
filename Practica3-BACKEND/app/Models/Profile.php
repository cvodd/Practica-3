<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'city',
        'country',
        'summary',
        'frameworks',
        'hobbies',
    ];

    protected $casts = [
        'frameworks' => 'json',
        'hobbies' => 'json',
    ];
}
