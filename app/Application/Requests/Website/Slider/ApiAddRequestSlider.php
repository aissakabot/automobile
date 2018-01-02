<?php

namespace App\Application\Requests\Website\Slider;


class ApiAddRequestSlider
{
    public function rules()
    {
        return [
            "title.*" => "min:2|max:80|requiredbody.*",
			"image" => "required|image",
			
        ];
    }
}
