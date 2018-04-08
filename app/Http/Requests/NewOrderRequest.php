<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiRequest;
use Illuminate\Validation\Rule;
use App\Vendor;
use Illuminate\Http\JsonResponse;
class NewOrderRequest extends ApiRequest
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
            'vendor_id'=>[
                'required',
                Rule::in( Vendor::getIds() )
            ],
            'pickup_address_1'=>'required|max:190',
            'pickup_address_2'=>'max:190',
            'pickup_suburb'=>'required|max:190',
            'pickup_postcode'=>'required|digits:4',
            'delivery_address_1'=>'required|max:190',
            'delivery_address_2'=>'max|190',
            'delivery_suburb'=>'required|max:190',
            'delivery_postcode'=>'required|digits:4'

        ];
    }

    /**
    Customizes the validation error messages
    */
    public function messages(){
        return [
            'vendor_id.required'=>'Service provider id is required!',
            'vendor_id.integer'=>'Service provider id should have an integer value!',
           // 'vendor_id.in'=>'The service provider with this id does not exists! Please enter a valid service provider id!',
        ];
    }


   

}
