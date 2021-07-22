<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commision extends Model
{
    use HasFactory;
    protected $table = 'commisions';
    protected $fillabel = ['collect_model', 'collect_price', 'collect_person', 'customer', 'remark'];
}
