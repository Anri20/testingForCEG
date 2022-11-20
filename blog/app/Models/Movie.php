<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Movie extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'genre_movie' ,'genre_id','movie_id')
            ->pivot('keterangan');
    }
}
