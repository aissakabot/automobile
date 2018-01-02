<?php

namespace App\Application\Requests\Website\Accessories;


class ApiAddRequestAccessories
{
    public function rules()
    {
        return [
            "title.*" => "min:2|max:100|required",
			"image" => "required|image",
			
        ];
    }
}
