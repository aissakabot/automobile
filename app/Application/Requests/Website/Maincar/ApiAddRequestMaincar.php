<?php

namespace App\Application\Requests\Website\Maincar;


class ApiAddRequestMaincar
{
    public function rules()
    {
        return [
            "title.*" => "min:4|max:120|required",
			"image" => "required|image",
			
        ];
    }
}
