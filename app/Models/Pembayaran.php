<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "pembayaran";

    public function tiket() {
        return $this->belongsTo(Tiket::class);
    }

    public function destinasi() {
        return $this->belongsTo(Destinasi::class);
    }
    
}
