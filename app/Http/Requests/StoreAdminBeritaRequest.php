<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminBeritaRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'judul'        => ['required','string','max:255'],
            'slug'         => ['nullable','string','max:255','unique:admin_beritas,slug'],
            'isi'          => ['required','string'],
            'excerpt'      => ['nullable','string','max:500'],
            'gambar'       => ['nullable','image','mimes:jpg,jpeg,png,webp','max:2048'],
            'published_at' => ['nullable','date'],
        ];
    }
}