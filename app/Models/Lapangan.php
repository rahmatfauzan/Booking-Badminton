<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapangan extends Model
{
    use HasFactory;
    protected $table = 'lapangans';
    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'gambar'
    ];
}
