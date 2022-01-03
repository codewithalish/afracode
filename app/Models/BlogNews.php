<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogNews extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'body',
        'image_path',
        'author_image',
        'author_name'
        ];


//\App\Models\Portfolio::limit(10)->get()
}
