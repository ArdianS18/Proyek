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

    // protected $guarded = ['id'];
    protected $fillable = ['wisata', 'genre_id', 'foto', 'tiket_anak', 'tiket_remaja', 'tiket_dewasa'];

    protected $table = "destinasi";
    protected $primaryKey = 'id';
    public function tiket()
    {
        return $this->belongsTo(Tiket::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

}
