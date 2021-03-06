<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','materia','email'];

    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
