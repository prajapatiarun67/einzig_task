<?php

namespace App\Http\Requests\user;

use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
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
                'name' => ['required'], 
                'email' => ['required', 'email','unique:einzig_user,email,NULL,id,deleted_at,NULL'],
                'subject' => ['required'],
                'message' => ['required'], 
                'image' => ['required',  'mimes:jpg,JPG,png,PNG,jpeg,JPEG','max:5120',], 
                'minute' => ['required'], 
                'am_pm' => ['required'], 
                'hour' => ['required'], 
                'date' => ['required'], 
        ];
    }
}
