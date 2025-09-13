<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminBeritaRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        // karena route resource dipetakan ->parameters(['admin-berita' => 'berita'])
        $id = is_object($this->route('berita')) ? $this->route('berita')->id : $this->route('berita');

        return [
            'judul'        => ['required','string','max:255'],
            'slug'         => ['nullable','string','max:255', Rule::unique('admin_beritas','slug')->ignore($id)],
            'isi'          => ['required','string'],
            'excerpt'      => ['nullable','string','max:500'],
            'gambar'       => ['nullable','image','mimes:jpg,jpeg,png,webp','max:2048'],
            'published_at' => ['nullable','date'],
        ];
    }
}



