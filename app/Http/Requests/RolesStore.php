<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RolesStore extends FormRequest
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
            // 验证规则
            'rname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/|unique:roles',
        ];
    }

    //验证提示
    public function messages(){
        return [
            'rname.unique'=>'角色名称已存在',
            'rname.required'=>'角色名称必填',    
            'rname.regex'=>'角色名称格式错误',    
        ];
    }
}
