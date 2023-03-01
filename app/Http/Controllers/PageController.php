<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo'selamat datang';
    }

    public function about(){
        echo'Mohammad Halim Perdana 2141720236';
    }

    public function articles($id){
        echo'halaman artikel dengan '.$id;
    }
}
