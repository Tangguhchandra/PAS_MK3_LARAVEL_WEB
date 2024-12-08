<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewCollection extends Model
{
    use HasFactory;
    protected $table = 'new_collections'; // Nama tabel di database
    protected $fillable = [
        'name',        
        'description', 
        'image',       
        'rating',      
    ];

    protected $casts = [
        'rating' => 'float', 
    ];
}