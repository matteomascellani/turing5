<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','paese'];

    public function car(){
        return $this->hasMany(Car::class);
    }
}
