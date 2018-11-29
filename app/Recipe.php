<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $guarded= [];

    public function ingredients(){
    	return $this->hasMany('App\Ingredient');
    }


    public function scopeType($query, $type){
   
      return $query->where('type', $type);
   
   }

   public function scopeName($query , $name){
 		return $query->where('name','like', '%'.$name.'%');
   }

}
