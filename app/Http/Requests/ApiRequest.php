<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use App\Exceptions\ValidationException;

class ApiRequest extends FormRequest
{

      
   protected function failedValidation(Validator $validator)
   {
       $errors=$this->formatErrors($validator);
       $errors = json_encode($errors);

       abort(422,$errors);
        
   }
    
    protected function formatErrors(Validator $validator)
    {
       $messages = [];
       $errors = $validator->getMessageBag()->toArray();
       foreach($errors as $e):
        foreach($e as $m):
            $messages[] = $m;
        endforeach;
       endforeach;
       return $messages;
    }
}   
