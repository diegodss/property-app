<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{   
   use SoftDeletes;
   protected $fillable = [
   	"name",
   	"price",
   	"bedroom",
   	"bathroom",
   	"storey",
   	"garage"
   ];

}
