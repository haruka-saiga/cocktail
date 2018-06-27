<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Base;
use App\Mixer;
use App\Cocktail;
use Illuminate\Support\Facades\DB;


class BasesController extends Controller
{
        public function base(){
        $bases = Base::pluck('base_name','id');
        $mixers = Mixer::pluck('mixer_name','id');
        return view('top',['bases' => $bases, 'mixers' => $mixers]);
    }
    
    
    

    public function search(Request $request) {
       

        $a=Cocktail::where('base_id',$request->base_id)->where('mixer_id',$request->mixer_id)->get()->first();
    
      
        return view('made',compact('a'));
    }
 
}