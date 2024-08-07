<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateStudentReq extends FormRequest
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
            'mdl_fname' => ['required', 'string', 'max:255'],
            'mdl_lname' => ['required', 'string', 'max:255'],
            'mdl_email' => ['required', 'string', 'email', 'max:255'],
            'mdl_contact' => ['required', 'string', 'max:20'],
            'mdl_dob' => ['required', 'string', 'max:255'],
            'mdl_add' => ['required', 'string', 'max:255'],
            //
        ];
    }
}
