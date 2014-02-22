<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 2/11/14
 * Time: 6:11 PM
 */

class DvdController extends BaseController{

    public function search() {
        $genres = Dvd::get_genres();
        $ratings = Dvd::get_ratings();
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

} 