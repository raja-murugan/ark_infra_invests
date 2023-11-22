<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_key',
        'soft_delete',
        'name',
        'email',
        'phone_number',
        'address',
        'plan',
        'status',
        'mobile_number',
        'alternate_mobileno',
        'userid',
        'total_month',
        'pending_month'
    ];
}
