<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    private $fillable = ['title','alias','genre_id','minutes','plot','released_at'];
    protected $dates = ['released_at'];

    //$date = \Carbon\Carbon::now();
    //$date->parse('next thursday')->format(Y-m-d);
    //released_at = \Carbon\Carbon::parse($released_at);
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function FormattedCreatedAtAttribute(){
                return $this->created_at->format('d/m/Y');
    }


}
