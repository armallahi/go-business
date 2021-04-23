<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costs extends Model
{
    use HasFactory;

    protected $table = 'costs';

    protected $fillable = [
        'fixed_costs',
        'variable_costs',
        'furniture_costs',
        'equipment_costs',
        'rental_payment',
        'capital'
    ];
}
