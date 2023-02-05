<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peternak extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function riwayat()
    {
        return $this->hasOne(Riwayat::class);
    }

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }
}
