<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with =['mobil', 'transmisi'];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }
    public function transmisi()
    {
        return $this->belongsTo(Transmisi::class);
    }
}

