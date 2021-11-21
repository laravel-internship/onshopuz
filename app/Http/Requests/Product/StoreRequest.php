<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required|numeric:max:6',
            'quatity' => 'required|numeric:max:5',
            'model' => 'nullable',
            'color' => 'nullable',
            'about' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|file|image|mimes:png,jpg,jpeg,bmp,git|max:500000',
            'images' => 'nullable',
            'category_id' => 'nullable',
        ];
    }
}
