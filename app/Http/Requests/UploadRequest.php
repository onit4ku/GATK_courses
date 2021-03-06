<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
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
        $rules = [
            'commandLine' => 'required',
            'GATKfamiliar' => 'required',
            'analyzeData' => 'required',
            'researchInterests' => 'required',
            'institution' => 'required',
            'position' => 'required',
            'dietaryReq' => 'required',
            'fullName' => 'required',
            'inputDinner' => 'required',
            'inputAlhambra' => 'required',
            'email' => 'required'];
        return $rules;
    }
}
