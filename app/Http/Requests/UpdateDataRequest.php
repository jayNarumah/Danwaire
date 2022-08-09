<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email',
            'phone_number' => 'required|min:11|max:13',
            'ward_id' => 'required|number',
            'dob' => 'required|date',
            'gender' => 'required',
            'user_type_id' => 'required|number',
            'qualification_id' => 'required|number',
            'emp_status_id' => 'required|number',
        ];
    }
}
