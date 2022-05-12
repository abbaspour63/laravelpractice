<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function  index()
    {

        $mostpopularvideos = Video::all()->random(6);
        $mostviewedvideos = Video::all()->random(6);
        return view('index', compact('mostpopularvideos', 'mostviewedvideos'));

       // dd("Index Controller");
       //return view('index');
     //$videos=video::latest()->take(6)->get();
   //  dd(video::all());

     $mostpopularvideos=video::all()->random(6);
     $mostviewedvideos=video::all()->random(6);




     //dd($videos);
//     return view('index',[
//           'videos'=>$videos,
//         'mostpopularvideos'=>$mostpopularvideos,
//         'mostviewedvideos'=>$mostviewedvideos
//       ]);
//
        //  return  view ('index',compact('mostviewedvideos','mostpopularvideos'));
    }
}
