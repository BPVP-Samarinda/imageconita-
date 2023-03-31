<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    $table='customergit';
    $fillable = [
        'nama',
        'jk',
        'alamat',
        'harga',
        'harga',
        'foto',
    ];
    public function customer()
    {
        return $this->belongsTo(kategori::class);
    }
}
