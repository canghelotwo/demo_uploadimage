<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'post_title' => 'required|unique:tbl_post,post_title|min:5|max:100',
            'post_slug' => 'required|unique:tbl_post,post_slug|min:5|max:100',
            
        ];
    }
    public function messages()
    {
        return [
            'post_title.required' => 'Hãy nhập dữ liệu!',
            'post_title.unique' => 'Tin tức đã tồn tại!',
            'post_title.min' => 'Tin tức phải lớn hơn 5 ký tự!',
            'post_title.max' => 'Tin tức phải nhỏ hơn 100 ký tự!',

            'post_slug.required' => 'Hãy nhập dữ liệu!',
            'post_slug.unique' => 'Slug đã tồn tại!',
            'post_slug.min' => 'Slug phải lớn hơn 5 ký tự!',
            'post_slug.max' => 'Slug phải nhỏ hơn 100 ký tự!',

        
        ];
    }
}
