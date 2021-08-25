<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|unique:tbl_category,category_name',
            'category_slug' => 'required|unique:tbl_category,category_slug',
        ];
    }
    public function messages()
    {
        return [
            'category_name.required' => 'Hãy Nhập dữ liệu!',
            'category_slug.required' => 'Hãy nhập dữ liệu!',
            'category_name.unique' => 'Tên thể loại đã tồn tại!',
            'category_slug.unique' => 'Slug thể loại đã tồn tại!',
        ];
    }
}
