<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'composer', 'date'];

    protected $table = "musics";

    public function composer(){

        return $this->belongsTo(Composer::class);
    }

    public function opera(){

        return $this->belongsTo(Opera::class);
    }
}
