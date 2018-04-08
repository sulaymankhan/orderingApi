<?php

namespace App\Http\Requests;


use App\Http\Requests\ApiRequest;
class UpdateVendorRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasActiveAccount();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name'=>'max:190',
            'average_processing_time'=>'integer'

        ];
    }
}
