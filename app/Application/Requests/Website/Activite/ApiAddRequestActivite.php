<?php

namespace App\Application\Requests\Website\Activite;


class ApiAddRequestActivite
{
    public function rules()
    {
        return [
            "title" => "min:2|max:150|required",
			"video" => "required|image",
			
        ];
    }
}
