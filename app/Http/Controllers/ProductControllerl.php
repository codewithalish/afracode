<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductControllerl extends Controller
{
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'title', 'price', 'operation'];
        $query = Product::get();
        return view('afracode.products.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]);
    }

    public function show($id)
    {
        //
        $query = Product::find($id);
        return view('afracode.products.show', ['item' => $query]);
    }
}
