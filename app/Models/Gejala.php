<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    public $incrementing = false;

    //Set TypeData untuk PrimaryKey
    protected $keyType = 'string';

    protected $fillable = ['id','gejala','ya','tidak']; 

    public function logika()
    {
        return $this->hasMany(Logika::class);
    }
}
