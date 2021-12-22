<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiteController extends Controller
{
    public function index(){
        $slug = Str::of('Laravel Framework')->slug('-');
        return view('site/index');
    }

    public function about(){
        return view('site/about');
        if(true){

            if(true){
                if (true) {

                }
            }
        } elseif (true) {

        }
    }

    public function coffee(){
        return view('site/coffee');
    }
 }
