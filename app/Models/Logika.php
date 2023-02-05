<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logika extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
