<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriPemesanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = "histori_pemesanans";
    
    public function jamTayang()
    {
        return $this->belongsTo(JamTayang::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function nomorDuduk()
    {
        return $this->belongsTo(NomorDuduk::class);
    }
}
