<?php
namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;

class GetOrdersRequest extends ApiRequest
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
            "from"=>"date_format:d-m-Y",
            "to"=>"date_format:d-m-Y"
        ];
    }
}
