<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function nation() {

        return $this->belongsTo(Nation::class);

    }

    public function music(){

        return $this->hasOne(Music::class);
    }
}
