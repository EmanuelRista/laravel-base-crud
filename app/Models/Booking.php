<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_full_name',
        'guest_credit_card',
        'room',
        'from_date',
        'to_date',
        'more_details',
    ];
}
