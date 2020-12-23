<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModeratorRequest extends FormRequest
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
            'name' => 'required',
            'email' => request()->route('moderator') ?'required|unique:admins,email,'.request()->route('moderator')->id:'required|unique:admins,email',
            'phone' => request()->route('moderator') ?'required|unique:admins,phone,'.request()->route('moderator')->id:'required|unique:admins,phone',
            'password' => request()->route('moderator') ? 'nullable':'required',
            'zone_id' => 'required|array',
            'zone_id.*' => 'required|exists:zones,id',
        ];
    }
}
