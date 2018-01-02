<?php
 namespace App\Application\Model;
 use Illuminate\Database\Eloquent\Model;
 class Brand extends Model
{
   public $table = "brand";
   public function car(){
		return $this->hasMany(Car::class, "brand_id");
		}
  public function maincar(){
  return $this->belongsToMany( Maincar::class, "brand_maincar", "brand_id" , "maincar_id");
  }
    protected $fillable = [
        'title','image'
   ];
 }
