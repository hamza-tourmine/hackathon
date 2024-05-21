<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class intervenants extends Controller
{
    public function index(){
        return view('ajouterIntervenant');
    }
}
