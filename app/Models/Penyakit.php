<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    public $incrementing = false;

    //Set TypeData untuk PrimaryKey
    protected $keyType = 'string';

    protected $fillable = ['id', 'penyakit', 'solusi'];

    public function logika()
    {
        return $this->hasMany(Logika::class);
    }

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class);
    }
}
