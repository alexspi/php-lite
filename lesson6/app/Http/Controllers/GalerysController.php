<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GalerysController extends Controller
{


    public function index(){

        $user =  auth()->user();

        return view('galery.page',['user'=>$user]);
    }

}
