<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'product_name' => 'required|string|max:255',
            'category' => 'required',
            'brand' => 'required',
            'tags' => 'required',
            'qty' => 'required',
            'regular_price' => 'required',
            'product_thumbnail' => 'required|mimes:png,jpg,jpeg',
            'product_images' => 'required|mimes:png,jpeg,jpg',
            'short_des' => 'required',
            'specification' => 'required'
        ]; 
    }
}
