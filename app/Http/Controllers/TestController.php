<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
       $r = rand(0, 1000);

       $countries = array("Argentina", "Belgium", "Canada", "Denmark");

       return view('test.index', array('p1'=>$r, 'p2' => $countries));
    }
}
