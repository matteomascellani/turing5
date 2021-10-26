<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table='persons';
    protected $fillable=['nome','cognome','data_nascita','address','zip','city','country','email','phone','professione'];
}
