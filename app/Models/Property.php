<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{   
   use SoftDeletes;
   protected $table = "property";
   protected $fillable = [
   	"name",
   	"price",
   	"bedroom",
   	"bathroom",
   	"storey",
   	"garage"
   ];

   public function scopeFilter($query, $filters) 
   {
   	return $filters->apply($query);
   }

}
