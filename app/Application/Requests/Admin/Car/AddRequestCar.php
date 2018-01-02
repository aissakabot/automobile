<?php
 namespace App\Application\Requests\Admin\Car;
 use Illuminate\Foundation\Http\FormRequest;
 class AddRequestCar extends FormRequest
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
        	"region_id" => "required|integer",
         "country_id" => "required|integer",
         "maincar_id" => "required|integer",
         "brand_id" => "required|integer",
                   "user_id" => "required|integer",
            "title" => "min:5|max:100|required",
   "body" => "min:10|required",
   "image" => "required|image",
   "youtube" => "nullable|url",
   "price" => "required|integer",
            ];
    }
}
