<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    protected $table = 'cats';//和database要一樣
    use HasFactory;
}
