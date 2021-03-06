<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ink extends Model
{
    use HasFactory;
    protected $table = 'inks';
    protected $fillabel=['ink_img', 'ink_model', 'ink_price', 'ink_commision'];
}
