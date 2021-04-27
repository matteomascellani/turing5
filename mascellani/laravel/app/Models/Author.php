<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function nation() {

        return $this->belongsTo(Nation::class);

    }

    public function book() {

        return $this->hasOne(Book::class);
    }
}
