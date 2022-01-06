<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCourseRequest extends FormRequest
{

    const BEGINNER = 'beginner';
    const INTERMEDIATE = 'intermediate';
    const HIGH = 'high';

    private $levels = [self::BEGINNER, self::INTERMEDIATE, self::HIGH];

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
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:60',
            'description' => 'required|string',
            'rating' => 'nullable|integer',
            'views' => 'nullable|integer',
            'level' => ['required', Rule::in(['beginner', 'intermediate', 'high'])],
            'active' => 'required|boolean'
        ];
    }
}
