<?php
namespace App\Http\Controllers;
use App\Models\video;
//use http\Env\Request;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class videoController extends Controller{

    public function index(){
    $videos=video::all();
    return  $videos;

}
  public function create(){

        return view('videos.create');
    }

    public function store (Request $request)
    {

        video::create($request->all());
        return redirect()->route('index')->with('alert',__('message.success'));
}

    public function show (Request $request,  video $video)
    {
        // $video=video::find($id);
        // if($video==null){
        //     abort(404);
        // }
       // dd($video);
        return   view('videos.show',compact('video'));
}


public function edit(video $video){
    
    return  view('videos.edit',compact('video'));
}

}

