@extends('layouts.afracode')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="section section-main-services section-main-services-1 ">
        <div class="pb-space">
            <div class="container">
                <header class="el-heading el-heading-1 pb-space center">
                    <span class="label">PRODUCTS</span>
                    <h2>products in AfraCode</h2>
                </header>
                <div class="row row-lg">
                    <!--Item-->

                    {{--                    @foreach(\App\Models\Service::limit(3)->get() as $item)--}}
                    @foreach($items as $item)
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="/afracode/products/{{$item->id}}">
                                <div class="el-card el-card-1 el-service el-service-1">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3>{{$item->title}}</h3>
                                        </div>
                                        <div class="col-6">
                                            <div class="el-card-icon bg-shadow-color-1 bg-gradient-color-1">
                                                <span class="{{$item->icon}}"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{$item->description}}</p>
{{--                                    <img src="{{$item->image_path}}" alt="Service">--}}
                                    <?php defaultImage($item->image_path) ?>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
                <br>

            </div>
        </div>
    </section>
@endsection
