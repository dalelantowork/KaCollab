<?php

namespace Modules\Hris\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'middle_name' => ['string', 'nullable'],
            'last_name' => ['required', 'string'],
            'employee_id' => ['required', 'string'],
            'employee_status' => ['required', 'string'],
            'password' => ['required', 'string', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
            'username' => ['required', Rule::unique('users', 'username'), 'string','unique:users,username'],
            'email' => ['required', Rule::unique('users', 'email'), 'email','unique:users,email'],
        ];
    }

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
     * Modify input data
     *
     * @return array
     */
    public function getSanitized()
    {
        $sanitized = request()->all();
        // module-generator

        if(!isset($sanitized['password'])) {
            $sanitized['password'] = bcrypt(Str::random(10));
        } else {
            $sanitized['password'] = bcrypt($sanitized['password']);
        }

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
