<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdminLayananRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'nama'      => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'status'    => ['required', 'in:aktif,nonaktif'],
        ];
    }
}