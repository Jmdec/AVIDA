<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
         'name', 'description', 'price', 'contact', 'amenities', 'email', 'fullname','image_path', 'id_image', 'video_path'
    ];
}
