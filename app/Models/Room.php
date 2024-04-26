<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'num',
        'floor',
        'description',
        'img_dir',
        'climatic',
        'window',
        'mirror',
        'price'
    ];
}
