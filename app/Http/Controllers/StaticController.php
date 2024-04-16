<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('welcome');
    } // index khater el page loula heya home jet el function men route fine get

    public function contact1() {
        return view('contact1');
    }
    public function category($id) {

        $cats=[
            '1'=>'games',
            '2'=>'books',
            '3'=>'Film',
        ];
            return view('category',["the_id"=>$cats[$id]??"this is not found" ]);
        }
        

}
