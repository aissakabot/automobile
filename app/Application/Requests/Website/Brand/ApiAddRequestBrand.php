<?php

namespace App\Application\Requests\Website\Brand;


class ApiAddRequestBrand
{
    public function rules()
    {
        return [
            "title.*" => "min:2|max:190|required",
			"image" => "required|image",
			
        ];
    }
}
