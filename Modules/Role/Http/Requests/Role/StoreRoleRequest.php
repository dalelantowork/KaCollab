<?php

namespace Modules\Role\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class StoreRoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('roles', 'name'), 'string'],
            'permission_id' => ['sometimes', 'array'],
        ];
    }

    /**
     * Determine if the role is authorized to make this request.
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
