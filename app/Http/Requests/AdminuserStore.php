<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminuserStore extends FormRequest
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
            //
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/|unique:users',
            'upass' => 'required|regex:/^[\w]{6,18}$/',
            'repass' => 'required|same:upass',
            
        ];
    }
    //验证提示
    public function messages(){
        return [
            'uname.unique'=>'用户名已存在',
            'uname.required'=>'用户名必填',    
            'uname.regex'=>'用户名格式错误',    
            'upass.required'=>'密码必填',    
            'upass.regex'=>'密码格式错误',    
            'repass.required'=>'确认密码必填',    
            'repass.same'=>'俩次密码不一致',    
            
        ];
    }
}
