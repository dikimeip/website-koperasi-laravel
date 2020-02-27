<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TabunganRequest extends FormRequest
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
    public function rules()
    {
        return [
            'jumlah' => 'required|min:5',
            'keterangan' => 'required|min:5',
            'admin' => 'required|min:10',
        ];
    }
}
