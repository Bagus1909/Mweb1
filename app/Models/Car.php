<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function varian()
    {
        return $this->belongsTo(Varian::class);
    }
    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }
}
