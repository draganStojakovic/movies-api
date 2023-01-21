<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "movies";

    protected $casts = ['genres' => 'array'];   // lepsi json

    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'releaseDate', 'genres'];
}
