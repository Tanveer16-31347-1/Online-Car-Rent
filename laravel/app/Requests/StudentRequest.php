<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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

            'uname'=>'required|unique:users',
            'password'=>'required|max:3',
            'name'=>'required|same:uname',
            'cgpa'=>'required',
            'dept'=>'required'
        ];
    }

    public function messages (){

        return [

            "uname.required"=> "testing required messages",
            "uname.unique"=> "Unique message testing"
        ];
    }
}
