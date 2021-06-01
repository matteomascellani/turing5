<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=['titolo','author_id','category_id','editor','language_id','pages','dimensioni','stato','date','peso'];

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function language(){
        return $this->belongsTo(Language::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
