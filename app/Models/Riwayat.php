<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peternak()
    {
        return $this->belongsTo(Peternak::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
