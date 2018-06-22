<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Base;
use App\Mixer;
use Illuminate\Support\Facades\DB;


class BasesController extends Controller
{
        public function base(){
        $bases = Base::pluck('base_name','id');
        $mixers = Mixer::pluck('mixer_name','id');
        return view('top',['bases' => $bases, 'mixers' => $mixers]);
    }
    
    
       public function sotre(Request $request){
               $base_id = 
               $mixer_id = 
       }
       
       public function made(){
           
           $cocktail = DB::table('cocktails')->where('base_id','' && 'mixer_id','')->value('cocktail_name');
           return view('made',['cocktails'=> $cocktails]);
           
       }
 
}
