<?php

namespace App\Application\Requests\Website\Maincar;

use Illuminate\Support\Facades\Route;

class ApiUpdateRequestMaincar
{
    public function rules()
    {
        $id = Route::input('id');
        return [
            "title.*" => "min:4|max:120|required",
			"image" => "required|image",
			
        ];
    }
}
