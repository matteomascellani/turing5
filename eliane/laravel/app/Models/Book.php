<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['nome','pages','id_author','id_serie'];

    public function author(){
        return $this->belongsTo(Author::class);// se on a une table author qui a un id, cette phrase permet de faire 2 query.
        // elle permet de selectionner tous les livres  de la base de donnee
        //en suite elle selectionne tous les auteurs liés a ces livre
    }

    public function serie(){
        return $this->belongsTo(Serie::class);
    }
}
