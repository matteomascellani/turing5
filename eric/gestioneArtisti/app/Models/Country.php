<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable=['paese','capitale','lingua','presidente'];

    public function artists(){
      return $this->hasmany(Artist::class);
    }
}
