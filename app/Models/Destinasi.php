<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tiket;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Destinasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "destinasi";

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
