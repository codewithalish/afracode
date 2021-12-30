<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'price',
        'body',
        'image_path',
        ];


//\App\Models\Portfolio::limit(10)->get()
}
