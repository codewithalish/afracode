<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $titleCard = 'لیست';
        $th = ['شناسه', 'title', 'price', 'operation'];
        $query = Portfolio::get();
        return view('admin.portfolio.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cardTitle = 'فرم ایجاد';
        return view('admin.portfolio.create' , compact('cardTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $inputs = $request->only('title', 'price', 'body', 'image_path');
        Portfolio::create($inputs);
        return redirect('admin/portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $titleCard = 'نمایش';
        $query = Portfolio::find($id);
        return view('admin.portfolio.show', ['item' => $query, 'titleCard' => $titleCard]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query = Portfolio::where('id', $id)->first();
        return view('admin.portfolio.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $query = $request->only(['title', 'price', 'body', 'image_path']);
        Portfolio::where('id', $id)->update($query);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Portfolio::query()->where('id', $id)->delete();
        return back();
    }
}
