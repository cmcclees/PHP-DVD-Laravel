<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 2/11/14
 * Time: 6:11 PM
 */

class DvdController extends BaseController{

    public function search() {
        $genres = Genre::all();
        $ratings = Rating::all();
        return View::make('dvds/search', [
            'genres' => $genres,
            'ratings' => $ratings
        ]);
    }

    public function listDvds() {
        $dvd_title = Input::get('title');
        $genre = Input::get('genres');
        $rating = Input::get('ratings');
        $dvds = Dvd::search($dvd_title, $genre, $rating);


        return View::make('dvds/dvds-list', [
            'dvds' => $dvds
        ]);
    }


    public function createDvd() {
        $genres = Genre::all();
        $ratings = Rating::all();
        $sounds = Sound::all();
        $labels = Label::all();
        $formats = Format::all();
        return View::make('dvds/create', [
            'ratings' => $ratings,
            'genres' => $genres,
            'sounds' => $sounds,
            'labels' => $labels,
            'formats' => $formats
        ]);
    }

    public function insertDvd() {
        $validation = Dvd::validate(Input::all());

        if($validation->passes()) {
        $dvd = new Dvd();
        $dvd->title = Input::get('title');
        $dvd->rating_id = Input::get('rating');
        $dvd->genre_id = Input::get('genre');
        $dvd->sound_id = Input::get('sound');
        $dvd->label_id = Input::get('label');
        $dvd->format_id = Input::get('format');
        $dvd->save();

        return Redirect::to('dvds/create')
            ->with('success', 'The DVD was inserted successfully!');
        }

        return Redirect::to('dvds/create')
            ->withInput()
            ->withErrors($validation);
    }

} 