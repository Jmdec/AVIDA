<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'duration',
        'interest_rate',
        'total_payment',
        'payment_status', // Include the total_payment field in the fillable array
        // Add other fillable fields here
    ];

    // Cast the total_payment attribute to float
    protected $casts = [
        'total_payment' => 'float',
    ];

    // Add any relationships or additional methods as needed
}
