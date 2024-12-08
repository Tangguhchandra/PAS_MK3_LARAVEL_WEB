<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WomanShoes extends Model
{
    use HasFactory;
    protected $table = 'woman_shoes';
    protected $fillable = [
        'name',
        'description',
        'image',
        'title',
        'subtitle',
        'rating',
        'price',
    ];
    protected $casts = [
        'rating' => 'float',
        'price' => 'decimal:2', // harga dengan dua desimal
    ];
}
