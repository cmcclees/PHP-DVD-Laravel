<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 3/3/14
 * Time: 5:34 PM
 */

class ImdbController extends BaseController{


    public function imdb() {
        $show = Input::get('show');
        $encoded = urlencode($show);
        $imdb = new \Itp\Api\ImdbSearch();
        $json = $imdb->getResults($encoded);

        //dd($json);

        if($json == null) {
            echo "EMPTY!!!";
            return Redirect::to('imdb/search')
                ->with('noshow', 'The show was not found!');
        } else {

            return View::make('imdb/imdb', [
                'dvds' => $json,
                'show' =>$show
            ]);
        }
    }

    public function imdbSearch() {
        return View::make('imdb/search');
    }

} 