<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class HomeController extends Controller
{
    public function index(){

        $allDbTrains = Train::all();

        return view('welcome',compact('allDbTrains'));
    }
}
