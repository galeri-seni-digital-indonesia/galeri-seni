<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    public $table = 'arts';

    protected $fillable = [
        'nama',
        'tahun',
        'ukuran',
        'mediaLukis',
        'gambar',
        'deskripsi',
        'artistId',
    ];
}
