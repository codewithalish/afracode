<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioDetail extends Model
{
    use HasFactory;
    protected $fillable=[
        'image_path',
        'title',
        'body',
        ];


//\App\Models\Portfolio::limit(10)->get()
}
