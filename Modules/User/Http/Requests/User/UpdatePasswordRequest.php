<?php

namespace Modules\User\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Hash;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => ['required', 'old_password'],
            'password' => ['required', 'confirmed'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->addExtension('old_password', function ($attribute, $value, $parameters, $validator) {
            return $this->old_password($value);
        });

        $validator->addReplacer('old_password', function ($message, $attribute, $rule, $parameters, $validator) {
            return 'old password is incorrect';
        });
    }

    private function old_password($value)
    {
        $check = Hash::check($value, Auth::user()->password, []);
        if ($check) {
            return true;
        }
    }

    public function messages()
    {
        return [
            'confirmed'  => 'Password does not match.',
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

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
