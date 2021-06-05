<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
     protected $fillable=['nome','cognome','indirizzo','cap','city','country','phone','email'];
}
