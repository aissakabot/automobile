<?php
 namespace App\Application\Requests\Website\Car;
 use Illuminate\Support\Facades\Route;
 class ApiUpdateRequestCar
{
    public function rules()
    {
        $id = Route::input('id');
        return [
        	"region_id" => "required|integer",
         "country_id" => "required|integer",
         "maincar_id" => "required|integer",
         "brand_id" => "required|integer",
         "user_id" => "required|integer",
         "user_id" => "required|integer",
            "title" => "min:5|max:100|requiredbody",
   "youtube" => "nullable|url",
            ];
    }
}
