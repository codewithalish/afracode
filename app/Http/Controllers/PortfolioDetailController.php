<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioDetailController extends Controller
{

    public function welcome()
    {
        $query=\App\Models\PortfolioDetail::limit(10)->get();
        return view('pages.portfolioDetails' , ['items'=>$query]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = PortfolioDetail::get();
        return view('portfolioDetails.index', ['items' => $query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('portfolioDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only('title', 'body', 'image_path');
        PortfolioDetail::create($inputs);
        return redirect('portfolioDetails');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = PortfolioDetail::find($id);
        return view('portfolioDetails.show', ['items' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $query = PortfolioDetail::where('id', $id)->first();
        return view('portfolioDetails.edit', ['items' => $query]);
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
        $query = $request->only(['title', 'body', 'image_path']);
        PortfolioDetail::where('id', $id)->update($query);
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
        PortfolioDetail::query()->where('id', $id)->delete();
        return back();
    }
}
