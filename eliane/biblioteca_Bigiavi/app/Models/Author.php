<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','country_id','email','codice'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
