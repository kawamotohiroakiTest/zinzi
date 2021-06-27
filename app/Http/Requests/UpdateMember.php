<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMember extends FormRequest
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
           'nullable',
           'max:13',
  
           //既存の値も許可
           Rule::unique('employees')->ignore($this->id)
         ],
  
        'email' => [
          'nullable',
          'max:255',
          'email',
  
           //既存の値も許可
           Rule::unique('employees')->ignore($this->id)
           ]
  
       ];
    }
}