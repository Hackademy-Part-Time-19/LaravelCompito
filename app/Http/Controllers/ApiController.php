<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){

        $response = Http::get('https://api.jikan.moe/v4/genres/anime')->json()['data'];
        dd($response);
        return view('genere',['dati'=>$response]);
    }
    public function animeByGenre($genre_id){

        $uri = 'https://api.jikan.moe/v4/anime?genres= '. $genre_id;

        $anime = Http::get($uri)->json()['data'];

        dd($anime);
        return view('SingoloGenere',compact('anime'));
    }
}
