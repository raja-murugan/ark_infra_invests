<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    use HasFactory;

    protected $fillable = [
        'unique_key',
        'plot_no',
        'rate_per_Sq_ft',
        'rate_per_Sq_ft',
        'facing',
        'block',
        'status',
        'soft_delete'
    ];
}
