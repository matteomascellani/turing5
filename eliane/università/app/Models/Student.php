<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','data_nascita','citta_residenza','indirizzo','cap','paese','email','telefono','corso_frequentato'];
}
