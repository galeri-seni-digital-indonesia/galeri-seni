<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;

    public $table = 'merchs';

    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'harga',
        'link',
    ];
}
