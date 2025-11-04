<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'instagram' => 'required|url',
            'linkedin' => 'required|url',
            'youtube' => 'required|url',
        ];
    }

    public function attributes()
    {
        return [
            'address' => __('keywords.address'),
            'phone' => __('keywords.phone'),
            'email' => __('keywords.email'),
            'facebook' => __('keywords.facebook'),
            'twitter' => __('keywords.twitter'),
            'instagram' => __('keywords.instagram'),
            'linkedin' => __('keywords.linkedin'),
            'youtube' => __('keywords.youtube'),
        ];
    }
}
