<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Destinasi;
class Tiket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = "tiket";

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }

}
