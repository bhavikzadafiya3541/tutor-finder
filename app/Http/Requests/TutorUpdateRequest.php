<?php

namespace App\Http\Requests;

use App\Models\Tutor;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TutorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "first_name" => "required|string|max:255",
            "last_name" => "required|string|max:255",
            "email" => "required|string|email|max:255|unique:".Tutor::class,
            "phone" => "required|string|max:20",
            "intro" => "required",
            "profile_picture" => [
                Rule::requiredIf(function () {
                    return ! $this->tutor->profile_picture;
                })
            ],
        ];
    }
}
