<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoviePeople extends Model
{
    use HasFactory;
    protected $fillable = ['movie_id','people_id','type_id'];

}
