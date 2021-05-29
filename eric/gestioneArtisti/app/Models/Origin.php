<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    use HasFactory;
    protected $fillable=['origine','genere'];

    public function artist(){
        return $this->hasMany(Artist::class);
    }
}
