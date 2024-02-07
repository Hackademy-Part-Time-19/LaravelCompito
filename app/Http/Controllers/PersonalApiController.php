<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalApiController extends Controller
{
    public $article=[0=>['title'=>'titolo1','body'=>'body1'],
                    1=>['title'=>'titolo2','body'=>'body2'],
                    2=>['title'=>'titolo3','body'=>'body3'],
                    3=>['title'=>'titolo4','body'=>'body4'],
                    4=>['title'=>'titolo5','body'=>'body5'],
                    5=>['title'=>'titolo6','body'=>'body6'],
                    6=>['title'=>'titolo7','body'=>'body7'],
                    7=>['title'=>'titolo8','body'=>'body8'],
                    8=>['title'=>'titolo9','body'=>'body9'],
                    9=>['title'=>'titolo10','body'=>'body10']];

    public function articles(){
        
        return $this->article;

    }
}
