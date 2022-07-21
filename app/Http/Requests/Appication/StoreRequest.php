<?php

namespace App\Http\Requests\Appication;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type' => 'required',
            'currency' => 'required',
            'genus' => 'required',
            'comp' => 'required',
            'date' => 'required',
            'country_sender' => 'required',
            'station_sender' => 'required',
            'country_receiver' => 'required',
            'station_receiver' => 'required',
            'sender' => 'required',
            'receiver' => 'required',
            'code_cargo' => 'required',
            'weight' => 'required',
            'terms' => 'required',
            'qty' => 'required',
            'payer' => 'required',
            'notes' => 'required',
            'loading' => 'required',
            'cost_in_kzt' => 'required',
            'period' => 'required',
        ];
    }
}
