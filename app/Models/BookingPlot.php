<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'projectname',
        'block',
        'plot_id',
        'plot_no',
        'square_feet',
        'ratepersqft',
        'total',
        'paid_amount',
        'balance_amount'
    ];
}
