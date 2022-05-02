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
       public function getlengthAttribute($value){
           return $value.'ثانیه';

       }
       public function getcreatedAtAttribute($value){
           return (new verta ($value))->formatDifference();

       }
}
