<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'contact', 'amenities', 'email', 'image',
    ];

    // Additional methods or relationships can be added here
}
