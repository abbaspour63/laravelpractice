<?php
namespace  App\Models;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class  video extends Model{
       use HasFactory;
       protected  $fillable=[
         'name','url','thumbnail','slug','length','description'
       ];
       //protected  $guarded=[];
       //Accessor in laravel
       public function getRouteKeyName()
       {
         
        return 'slug';
       }
       public function getlengthAttribute($value){
           return $value.'ثانیه';

       }
       public function getcreatedAtAttribute($value){
           return (new verta ($value))->formatDifference();

       }
      //  public function relatedVideos(int $count=6){
      //    return video::all()->random($count);

      //  }
      public function relatedVideos(int $count=6){
        return video::all()->random($count);

      }
      
       
      }


