<?php

namespace App\Application\Requests\Admin\Brand;

use Illuminate\Foundation\Http\FormRequest;

class AddRequestBrand extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title.*" => "min:2|max:190|required",
			"image" => "required|image",
			
        ];
    }
}
