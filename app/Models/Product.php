<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'harga',
        'stock',
        'berat',
        'gambar',
        'kondisi',
        'deskripsi'];

    protected $casts = [
        'harga' => 'integer',
        'stock' => 'integer',
        'berat' => 'float',
    ];
}
