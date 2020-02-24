<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('pages.about',[
           'articles' => Article::take(3)->latest()->get()
        ]
        );
    }
    public function contact() 
    {
        return view("pages.contact");  
    }
}
