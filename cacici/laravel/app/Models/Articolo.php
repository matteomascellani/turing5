<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articolo extends Model
{
    use HasFactory;
    protected $fillable = ['Lean','Sku','Tipologia','Marca'];


    public function tipologia()
    {
        return $this->belongsTo(tipologia::class);
    }
}
