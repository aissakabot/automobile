<?php

namespace App\Application\Requests\Website\Activite;

use Illuminate\Support\Facades\Route;

class ApiUpdateRequestActivite
{
    public function rules()
    {
        $id = Route::input('id');
        return [
            "title" => "min:2|max:150|required",
			"video" => "required|image",
			
        ];
    }
}
