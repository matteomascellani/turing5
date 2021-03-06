<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviePerson extends Model
{
    use HasFactory;

    protected $fillable = ['movie_id', 'person_id', 'type_id'];
}
