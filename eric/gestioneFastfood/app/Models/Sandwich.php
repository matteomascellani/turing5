<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandwich extends Model
{
    use HasFactory;

    protected $table='sandwichs';
    protected $fillable=['nome','origine','peso','prezzo'];
}