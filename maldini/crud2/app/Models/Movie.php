<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'alias', 'genre_id', 'minutes', 'plot', 'released_at'];

    protected $dates = ['relased_at'];

    public function genre() {

        return $this->belongsTo(Genre::class);
    }
}
