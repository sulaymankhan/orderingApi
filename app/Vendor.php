<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Vendor extends Model
{

	protected $fillable=['company_name','average_processing_time'];
    

    public function orders(){
   		return $this->hasMany(\App\Order::class);
    }


   public static function getIds(){
   		return DB::table('vendors')->select('id')->get()->map(function($v){

   			return $v->id;
   		})->toArray();
   }
}
