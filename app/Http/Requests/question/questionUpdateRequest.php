<?php

namespace App\Http\Requests\question;

use App\Models\question;
use Illuminate\Foundation\Http\FormRequest;

class questionUpdateRequest extends FormRequest
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
        return array_merge(question::createRule(),[
            'id' => 'required|exists:questions,id'
        ]);
    }
}
