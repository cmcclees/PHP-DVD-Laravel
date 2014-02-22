<?php

class Dvd {

    public static function search($title, $genre, $rating) {
        $query = DB::table('dvds')
            ->join('ratings','ratings.id','=','dvds.rating_id')
            ->join('genres','genres.id','=','dvds.genre_id')
            ->join('labels','labels.id', '=', 'dvds.label_id')
            ->join('sounds','sounds.id', '=', 'dvds.sound_id')
            ->join('formats','formats.id', '=', 'dvds.format_id');



        if($title) {
            $query->where('title','LIKE', "%$title%");
        }
        if($genre != 'all') {
            $query->where('genre_id','=', "$genre");
        }
        if($rating != 'all') {
            $query->where('rating_id','=',"$rating");
        }

        $dvds = $query->get();

        return $dvds;
    }

    public static function get_genres() {
        $query = DB::table('genres')
        ->select('genre_name', 'id');
        $genres = $query->get();
        return $genres;
    }

    public static function get_ratings() {
        $query = DB::table('ratings')
        ->select('rating_name', 'id');
        $ratings = $query->get();
        return $ratings;
    }
} 