<?php

class Dvd extends Eloquent{

    public static function search($title, $genre, $rating) {

        $dvds = Dvd::with('rating', 'genre', 'sound', 'label', 'format');

        if($title) {
            $dvds->where('title', 'LIKE', "%$title%");
        }
        if($genre != 'all') {
            $dvds->where('genre_id','=', "$genre");
        }
        if($rating != 'all') {
            $dvds->where('rating_id','=',"$rating");
        }

        return $dvds->take(30)->get();
    }

    public function rating()
    {
        return $this->belongsTo('Rating');
    }


    public function genre()
    {
        return $this->belongsTo('Genre');
    }

    public function sound() {
        return $this->belongsTo('Sound');
    }

    public function label() {
        return $this->belongsTo('Label');
    }

    public function format() {
        return $this->belongsTo('Format');
    }

    public static function validate($input) {
        return Validator::make($input, [
            'title' => 'required|alpha_num|min:3',
            'label' => 'required|integer',
            'sound' => 'required|integer',
            'genre' => 'required|integer',
            'rating' => 'required|integer',
            'format' => 'required|integer'
        ]);
    }
} 