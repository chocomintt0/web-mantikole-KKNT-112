<?php

// namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdminLayanan>
//  */
// class AdminLayananFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     public function definition(): array
//     {
//         return [
//             //
//         ];
//     }
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AdminLayanan extends Model
{
    protected $table = 'admin_layanan';

    protected $fillable = [
        'nama','deskripsi',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($m) {
            if (empty($m->slug)) $m->slug = static::uniqueSlug($m->nama);
            if (empty($m->excerpt)) $m->excerpt = Str::limit(strip_tags($m->deksripsi), 160);
        });

        static::updating(function ($m) {
            if ($m->isDirty('nama') && empty($m->slug)) {
                $m->slug = static::uniqueSlug($m->judul, $m->id);
            }
            if ($m->isDirty('deskripsi') && empty($m->excerpt)) {
                $m->excerpt = Str::limit(strip_tags($m->isi), 160);
            }
        });
    }

    // protected static function uniqueSlug(string $judul, $ignoreId = null): string
    // {
    //     $base = Str::slug($judul);
    //     $slug = $base; $i = 1;

    //     while (static::where('slug', $slug)
    //         ->when($ignoreId, fn($q) => $q->where('id','!=',$ignoreId))
    //         ->exists()) {
    //         $slug = $base.'-'.$i++;
    //     }
    //     return $slug;
    // }

    // public function getGambarUrlAttribute(): ?string
    // {
    //     return $this->gambar ? asset('storage/'.$this->gambar) : null;
    // }
}
