<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminLayanan extends Model
{
    protected $table = 'admin_layanan';

    protected $fillable = [
        'nama', 'deskripsi', 'status',
    ];
}