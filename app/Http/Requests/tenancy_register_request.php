<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tenancy_register_request extends FormRequest
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
            'name' => 'required|string|max:255',
            'domain' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => ['required', 'string'],
        ];
    }

    public function prepareForValidation(){
        $this->merge([
            'domain'=> $this->domain.'.'.config('tenancy.central_domains')[1]
        ]);
    }
}
