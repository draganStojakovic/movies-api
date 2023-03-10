<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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
            // 'title' => 'required|min:3|max:100|unique:movies,title',
            'title' => 'required|min:3|max:100',
            'director' => 'required',
            'imageUrl' => 'url',
            'duration' => 'required|numeric|min:1|max:500',
            'releaseDate' => 'required',
        ];
    }
}
