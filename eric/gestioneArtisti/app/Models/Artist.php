<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','brano','anno','country_id'];

    public function country(){
        return $this->belongsTo(Country::class);
    }

}
