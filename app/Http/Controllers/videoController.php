<?php
namespace App\Http\Controllers;
use App\Models\video;
//use http\Env\Request;
use Illuminate\Http\Request;

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

        $request->validate([
            'name'=>['required'],
            'length'=>['required','integer'],
            'slug'=>['required','unique:videos,slug'],
            'url'=>['required','url'],
            'thumbnail'=>['required','url']
        ]);
        video::create($request->all());
       // dd($request->all());
        return redirect()->route('index')->with('alert',__('message.success'));


}
}

