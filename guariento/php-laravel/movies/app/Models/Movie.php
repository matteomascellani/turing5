<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'alias', 'genre_id', 'minutes', 'plot'];

    protected $dates = ['released_at'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }
}
