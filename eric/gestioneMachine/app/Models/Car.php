<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=['marca','colore','customer_id'];

    public function customer(){
        return $this->belongsTo(customer::class);
    }
}
