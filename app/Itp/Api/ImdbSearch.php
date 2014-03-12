<?php
/**
 * Created by PhpStorm.
 * User: cmcclees
 * Date: 2/25/14
 * Time: 6:01 PM
 */

namespace Itp\Api;


class ImdbSearch {
    public function getResults($show) {
        $endpoint = "http://imdbapi.poromenos.org/js/?name=";
        $endpoint .= $show;

        $json = file_get_contents($endpoint);

        //dd($json);
        //dd(json_decode($json));
        return json_decode($json);
    }
} 