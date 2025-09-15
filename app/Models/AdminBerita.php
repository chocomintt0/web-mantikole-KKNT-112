<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AdminBerita extends Model
{
    protected $table = 'admin_beritas';

    protected $fillable = [
        'judul','slug','gambar','isi','excerpt','published_at',
    ];

    protected $casts = ['published_at' => 'datetime'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($m) {
            if (empty($m->slug)) $m->slug = static::uniqueSlug($m->judul);
            if (empty($m->excerpt)) $m->excerpt = Str::limit(strip_tags($m->isi), 160);
        });

        static::updating(function ($m) {
            if ($m->isDirty('judul') && empty($m->slug)) {
                $m->slug = static::uniqueSlug($m->judul, $m->id);
            }
            if ($m->isDirty('isi') && empty($m->excerpt)) {
                $m->excerpt = Str::limit(strip_tags($m->isi), 160);
            }
        });
    }

    protected static function uniqueSlug(string $judul, $ignoreId = null): string
    {
        $base = Str::slug($judul);
        $slug = $base; $i = 1;

        while (static::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id','!=',$ignoreId))
            ->exists()) {
            $slug = $base.'-'.$i++;
        }
        return $slug;
    }

    // public function getGambarUrlAttribute(): ?string
    // {
    //     return $this->gambar ? asset('storage/'.$this->gambar) : null;
    // }

    public function getGambarUrlAttribute(): ?string
    {
        return $this->gambar ? asset('storage/'.$this->gambar) : null;
    }

}