<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //

        $titleCard = 'لیست';
        $th = ['شناسه', 'title', 'price', 'operation'];
        $query = Post::query()
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.posts.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]
        );

//
//        $query=Post::get();
//        return view('admin.posts.index',['items'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.posts.create');
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
        $data = $request->all();
        $rules = [
            'title' => ['required', 'string', 'max:10', 'min:8'],
            'price' => ['required', 'number'],
            'body' => ['required', 'string', 'min:5'],
            'image_path' => ['required', 'string'],
            'details' => ['required', 'string', 'min:10'],

        ];
        $messages = [
            'required' => ' فیلد :attribute اجباری است',
            'min' => 'فیلد شما باید حداقل :min تا کاراکتر داشته باشد'
        ];
        $validator = Validator::make($data, $rules, $messages);
        $inputs = $request->only('title', 'price', 'body', 'image_path', 'details');
        Post::create($inputs);



        if($validator->fails()){
            return back()->withErrors($validator);
        }
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
        $query = Post::find($id);
        return view('admin.posts.show', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query = Post::where('id', $id)->first();
        return view('admin.posts.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        //
        $query = $request->only(['title', 'price', 'body', 'image_path', 'details']);
        Post::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');
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
        Post::query()->where('id', $id)->delete();
        return back();
    }
}
