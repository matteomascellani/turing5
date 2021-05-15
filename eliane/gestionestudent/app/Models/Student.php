<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['nome','cognome','anno_immatricolazione','corso_frequentato','facoltà','anno_corso','user_id','idprof'];

    function user(){
        return $this->belongsTo(user::class);
    }

    function professor(){

        return $this->belongsTo(Professor::class);
    }
}
