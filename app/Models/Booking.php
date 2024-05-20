<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'id_user',
        'id_lapangan',
        'tgl_pemesanan',
        'tgl_main',
        'jam',
        'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id');
    }
    public function lapangan(): BelongsTo
    {
        return $this->belongsTo(Lapangan::class, 'id_lapangan');
    }
}
