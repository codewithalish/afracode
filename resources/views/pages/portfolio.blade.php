@extends('layouts.afracode')
@section('content')

<!--Portfolio-->
<section class="section section-portfolio section-portfolio-1">
    <div class="pt-space pb-space">
        <div class="container pt-space">
            <header class="el-heading el-heading-1 center pb-space">
                <span class="label mb-5">POSTS</span>
                <h2>Our World Class Works</h2>
            </header>
            <div class="row row-lg">
                <!--Item-->
                @foreach(\App\Models\Post::get() as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="el-card el-card-1 el-portfolio elportfolio-1">
                        <div class="image">
                            <a href="https://themeforest.net/item/orwell-organic-food-store-and-healthy-shop/29113626">
                                <img src="{{$item->image_path}}" alt="Portfolio: Orwell - Organic Food Store and Healthy Shop">
                            </a>
                        </div>
                        <div class="details">
                            <h3>
                                <a href="#">{{$item->title}}</a>
                            </h3>
                            <p><span class="subtitle">{{$item->body}}</span></p>
{{--                            <span class="price">{{$item->price}}$</span>--}}
                            <a href="/afracode/posts/{{$item->id}}" class="button button-sm button-secondary button-purchase">
                                <span class="text">show</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

                <!---->

            </div>
        </div>
    </div>
</section>
<!--/-->
<!--CTA-->
<section class="">
    <div class="mb-space">
        <div class="container">
            <div class="section-cta section-cta-17 bg-primary">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4>We can help to grow up your online business</h4>
                        <p>With an intuitive markup, powerful and lightning fast build tools, Quick has everything you need to turn your ideas into incredible products.</p>
                    </div>
                    <div class="col-12 col-md-4 text-right">
                        <a href="#" class="button button-md button-line-light mt-15">
                            <span class="text">Contact Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->


@endsection
