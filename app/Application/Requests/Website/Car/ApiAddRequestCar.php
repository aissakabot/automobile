<?php
 namespace App\Application\Requests\Website\Car;
  class ApiAddRequestCar
{
    public function rules()
    {
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
