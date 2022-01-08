<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $query = Product::get();
        return view('admin.products.index',
            [
                'items' => $query,
                'th' => $th,
                'titleCard' => $titleCard,
            ]);

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
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        $rules=[
            'title'=> ['required' , 'string', 'max:20' , 'min:5'],
            'description'=> ['required' , 'string' , 'min:10' , 'max:40'],
            'price'=> ['required'],
            'image_path'=> ['required' , 'string'],
            'details'=> ['required' , 'string' , 'min:50']
        ];
        $messages=[
            'required'=> 'فیلد :attribute اجباری است.' ,
            'min'=>'حداقل کاراکتر مجاز این فیلد :min کاراکتر است.',
            'max'=>'حداکثر کاراکتر مجاز این فیلد :max کاراکتر است.'

        ];

        $validator=Validator::make($data , $rules , $messages);

        $inputs=$request->only('title','price','description','image_path','details');
        Product::create($inputs);

        if($validator->fails()){
            return back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $query=Product::find($id);
        return view('admin.products.show',['item'=>$query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $query=Product::where('id',$id)->first();
        return view('admin.products.edit',['item'=>$query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $query=$request->only(['title','price','description','image_path','details']);
        Product::where('id',$id)->update($query);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::query()->where('id', $id)->delete();
        return back();
    }
}
