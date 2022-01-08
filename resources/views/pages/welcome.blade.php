@extends('layouts.afracode')

@section('content')
    <!--Hero-->
    <section class="section-hero section-hero-17 mt-80">
        <div class="hero-shape"></div>
        <div class="container">
            <div class="row row-0">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-content">
                        <h1>Start your Business with AfraCode.</h1>
                        <p>Build a beautiful, modern website with flexible Bootstrap components built from scratch.</p>
                        <a href="#" class="button button-md button-line-light">
                            <span class="text text-light">Let's Get Started</span>
                        </a>
                        <a href="#" class="button button-md button-warning">
                            <span class="text">Watch  Portfolio</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="hero-frame">
                        <img src="/afracode/assets/images/frames/macbook.svg" alt="Frame Shwocase">
                        <div class="hero-frame-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Services-->
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
                                    <img src="{{$item->image_path ?? '/images/default.jpg'}}" alt="Service">
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
                <br>
                <div><a href="/afracode/products">show more</a></div>

            </div>
        </div>
    </section>
    <!--/-->
    <!--About-->
    <section class="section section-excerpt">
        <div class="pt-space pb-space">
            <div class="container">
                <div class="row row-lg">
                    <div class="col-lg-7 order-lg-1 text-left col-image">
                        <img src="/afracode/assets/images/images/2.png" alt="About Us">
                    </div>
                    <div class="col-lg-5 order-lg-2">
                        <div class="display-spacing">
                            <header class="el-heading el-heading-1 el-heading-mobilecenter">
                                <span class="label">ABOUT US</span>
                                <h2>We'll Plan, Design and Develope & Maintain Project</h2>
                                <p>Start your Business with AfraCode. Build a beautiful, modern website with flexible
                                    Bootstrap components built from scratch.</p>
                                <a href="#" class="button button-md button-primary">
                                    <span class="text">Read More</span>
                                </a>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->
    <!--Services-->
    <section class="section section-excerpt">
        <div class="pb-space">
            <div class="container">
                <div class="row row-lg">
                    <div class="col-lg-7 order-lg-2 text-right item-1 col-image">
                        <img src="/afracode/assets/images/images/1.png" alt="Main services">
                    </div>
                    <div class="col-lg-5 order-lg-1 item-2">
                        <div class="display-spacing">
                            <header class="el-heading el-heading-1 el-heading-mobilecenter">
                                <span class="label">SERVICES</span>
                                <h2>We Provide Awesome Service to our Customer</h2>
                                <p>Start your Business with AfraCode. Build a beautiful, modern website with flexible
                                    Bootstrap components built from scratch.</p>
                                <a href="#" class="button button-md button-primary">
                                    <span class="text">More Details</span>
                                </a>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->

    <!--CTA-->
    <section class="">
        <div class="pb-space">
            <div class="container">
                <div class="section-cta section-cta-17 bg-primary">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4>We can help to grow up your online business</h4>
                            <p>With an intuitive markup, powerful and lightning fast build tools, Quick has everything
                                you need to turn your ideas into incredible products.</p>
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
