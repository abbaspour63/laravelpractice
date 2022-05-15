<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    public function  index()
    {
        $videos=video::latest()->take(6)->get();
        $mostpopularvideos = Video::all()->random(6);
        $mostviewedvideos = Video::all()->random(6);
        return view('index', compact('videos','mostviewedvideos','mostpopularvideos'));

       // dd("Index Controller");
       //return view('index');

   //  dd(video::all());




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
