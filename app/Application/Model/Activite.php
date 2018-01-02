<?php

namespace App\Application\Model;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{

  public $table = "activite";

   protected $fillable = [
        'title','video'
   ];

}
