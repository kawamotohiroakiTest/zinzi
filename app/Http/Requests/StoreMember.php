<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;


class StoreMember extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         //return false;
        //↓falseをtrueに変更
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

            //追加
            'name' => [
              'string',
              'required',
              'max:20'
               ],
      
            'telephone' => [
              'string',
              'required',
              'max:13',
              'unique:employees'
              ],
      
            'email' => [
              'required',
              'max:255',
              'email',
              'unique:employees'
              ]
          ];
    }
}
