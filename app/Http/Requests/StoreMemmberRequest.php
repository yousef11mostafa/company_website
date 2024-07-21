<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemmberRequest extends FormRequest
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
            'position'=>'required',
            'facebook'=> 'required|url:http,https',
            'twiter'=> 'url:http,https',
            'linked_in'=> 'url:http,https',
            'img'=>'required|image|mimes:jpeg,png,gif',
        ];
    }

    public function attributes(){
        return [
                    // 'title' => __("keywords.title"),
                ];
     }

}
