<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            "title" => "required|min:5|max:100",
            "thumb" => "required|min:5",
            "price" => "required|min:4|max:6",
            "description" => "nullable",
            "series" => "required|min:3|max:100",
            "sale_date" => "required",
            "type" => "required"
        ];

    }

    public function messages()
    {
        return[
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "title.max" => "Il titolo deve essere massimo di :max caratteri",
            "thumb.required" => "Il percorso è obbligatorio",
            "thumb.min" => "Il percorso deve essere almeno di :min caratteri",
            "price.required" => "Il prezzo è obbligatorio",
            "price.min" => "Il prezzo deve essere almeno di :min caratteri",
            "price.max" => "Il prezzo deve essere almeno di :max caratteri",
            "description.required" => "la descrizione è obbligatoria",
            "series.required" => "la serie è obbligatoria",
            "series.min" => "la serie deve essere almeno di :min caratteri",
            "series.max" => "la serie deve essere almeno di :max caratteri",
            "sale_date.required" => "la data è obbligatoria",
            "type.required" => "la tipologia è obbligatoria",
        ];
    }
}
