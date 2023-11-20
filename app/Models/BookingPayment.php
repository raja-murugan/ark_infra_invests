<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPayment extends Model
{
    use HasFactory;


    protected $fillable = [
        'unique_key',
        'soft_delete',
        'booking_id',
        'plot_id',
        'date',
        'bill_no',
        'block',
        'plot_no',
        'sqft',
        'ratepersqft',
        'totalamount',
        'payment_method',
        'terms',
        'payableamount'
    ];
}
