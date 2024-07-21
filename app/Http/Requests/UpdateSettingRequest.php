<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name'=>'required',
            'email'=>'required',
            'secondname'=>'required',
            'state'=>'required',
            'company'=>'required',
            'zip'=>'required',
            'address'=>'required',
            'img'=>'image|mimes:jpeg,png,gif',
            'facebook'=>'url|nullable',
            'twiter'=>'url|nullable',
            'linked_in'=>'url|nullable',
            'instagram'=>'url|nullable',
            'youtube'=>'url|nullable',
            'github'=>'url|nullable',
        ];
    }

    public function attributes(){
        return [
                    // 'title' => __("keywords.title"),
                ];
     }

}
