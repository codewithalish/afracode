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


   // $portfolio_option=Portfolios::limit(10)->get()
}
