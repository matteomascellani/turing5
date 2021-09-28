<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','data_nascita','citta_residenza','indirizzo','cap',
    'paese','email','telephono','corso_frequantato'];
    public function professors(){
        return $this->belongsToMany(Professor::class);
    }
}
