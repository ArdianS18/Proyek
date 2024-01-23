<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tiket;

class Destinasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = "destinasi";

    
    public function tiket() {
        return $this->hasMany(Tiket::class);
    }
}
