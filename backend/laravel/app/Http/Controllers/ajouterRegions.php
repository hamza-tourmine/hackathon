<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regions ;

class ajouterRegions extends Controller
{
    public function index(){
        $redion = Regions::all() ;
        return view('ajouterRegions' , ['Regions'=> $redion]);
    }


    public function insert(Request $res){
        // dd($res);
       Regions::create(
       [ 'guard_name'=>$res->gurdnom,
        'name'=>$res->name
       ]);
       return redirect()->route('ajouter-region');
    }

}
