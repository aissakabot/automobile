<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Maincar extends Model
{
   public $table = "maincar";
   public function car(){
		return $this->hasMany(Car::class, "maincar_id");
		}
  public function brand(){
  return $this->belongsToMany( Brand::class, "brand_maincar", "maincar_id" , "brand_id");
  }
    protected $fillable = [
        'title','image'
   ];
 }
