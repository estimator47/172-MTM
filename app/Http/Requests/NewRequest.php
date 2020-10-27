<?php

namespace App\Http\Requests;

class NewRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return $rules = [
            'name' => 'bail|required|max:255',
            'info' => 'bail|required',
            'nameru' => 'bail|required|max:255',
            'inforu' => 'bail|required',
            'image' => 'bail|required|max:255',
        ];
    }
}
