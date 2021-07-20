<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillabel=['customer_name', 'customer_address', 'customer_number', 'model', 'status', 'remake'];
}
