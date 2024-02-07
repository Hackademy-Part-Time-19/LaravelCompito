<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class MangaController extends Controller
{
    public function index(){
        $uri= 'https://api.jikan.moe/v4/manga'/*  . $id . '/full' */  ;
        $manga=http::get($uri)->json()['data'];

       
        return view('manga',compact('manga'));
    }
    
    
}
