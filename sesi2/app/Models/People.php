<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    // asosiatif array
    protected $attributes = [
        'id' => 1,
        'name' => 'David',
        'major' => 'Computer Science',
        'gender' => 'male'
    ];
}
