<?php

namespace Modules\Form\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
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
   public function rules(): array
   {
       return [
           'user_id' => ['required', 'integer'],
           'form_id' => ['sometimes', 'integer'],
       ];
   }

   /**
   * Modify input data
   *
   * @return array
   */
   public function sanitized(): array
   {
        $data = $this->request->all();

        $rawData = $data;

        if (@$rawData['_token']) {
            unset($rawData['_token']);
        }

        unset($rawData['user_id']);
        unset($rawData['form_id']);

        $sanitized = [
            'user_id' => $data['user_id'],
            'form_id' => $data['form_id'],
            'json' => $rawData,
        ];

        return $sanitized;
   }
}
