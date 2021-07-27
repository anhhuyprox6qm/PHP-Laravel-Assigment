<?php


namespace App\Http\Requests;
use BenSampo\Enum\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;



class ApartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>['required','min:10','max:50'],
            'address'=>['required'],
            'price'=>['numeric'],
            'description'=>[''],
            'detail'=>[''],
            'thumbnail'=>[''],
            'status'=>['numeric','min:1','max:3'],
        ];
    }
}
