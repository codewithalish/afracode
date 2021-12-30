
@extends('layouts.app')

@section('content')


<!--Hero-->
<section class="section section-hero section-hero-15 section-wave section-wave-1 overlay-color overlay-pattern">
    <span class="bg-color bg-dark-30"></span>
    <span class="bg-pattern bg-pattern-3"></span>
    <div class="hero-frame">
        <img src="/afracode/assets/images/demo/frame.png" alt="Alternative">
        <div class="frame-lcd overlay-color">
            <div class="el-slider">
                <div class="el-swiper-hero-demo swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="el-item">
                                <img src="/afracode/assets/images/demo/hero-1.jpg" alt="--Alternative--">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="el-item">
                                <img src="/afracode/assets/images/demo/hero-2.jpg" alt="--Alternative--">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="el-item">
                                <img src="/afracode/assets/images/demo/hero-3.jpg" alt="--Alternative--">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <span class="bg-color bg-dark-30"></span>
        </div>
    </div>
    <div class="display-center">
        <div class="container">
            <div class="hero-content text-left">
                <h1 class="text-light">A better way to build eCommerce websites.</h1>
                <p class="text-light">Create your dream site with Orwell HTML Template.</p>
                <a href="http://demo.afracode.com/orwell/home-1.html" class="button button-md button-primary">
                    <span class="text">LIVE DEMO</span>
                </a>
                <a href="#" class="button button-md button-secondary">
                    <span class="text">PURCHASE</span>
                </a>
            </div>
        </div>
    </div>
    <div class="hero-icons">
        <div class="container">
            <p class="text-light">Compatible with:</p>
            <ul>
                <li class="overlay-image">
                    <img src="/afracode/assets/images/demo/icon-1.svg" alt="--Feature--">
                </li>
                <li class="overlay-image">
                    <img src="/afracode/assets/images/demo/icon-2.svg" alt="--Feature--">
                </li>
                <li class="overlay-image">
                    <img src="/afracode/assets/images/demo/icon-3.svg" alt="--Feature--">
                </li>
                <li class="overlay-image">
                    <img src="/afracode/assets/images/demo/icon-4.svg" alt="--Feature--">
                </li>
            </ul>
        </div>
    </div>
</section>
<!--/-->
<!--Features-->
<section class="section-features section-features-16 pt-space">
    <div class="container">
        <header class="el-heading el-heading-1 mb-space center">
            <span class="label">MAIN FEATURES</span>
            <h2>Why Choose Us?</h2>
        </header>
        <div class="row row-lg">

            @foreach(\App\Models\PortfolioDetail::limit(10)->get() as $item)
{{--            @foreach($items as $item)--}}
            <div class="col-12 col-md-12 col-lg-6 col-xl-4">
                <div class="el-card el-feature el-feature-16">
                    <div class="icon">
                        <img src="{{$item->image_path}}" alt="Features">
                    </div>
                    <h4>{{$item->title}}</h4>
                    <p>{{$item->body}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--/-->
<!--Plan-->
<section class="section section-plan section-plan-1 pt-space pb-space">
    <div class="container">
        <header class="el-heading el-heading-1 center pb-space">
            <span class="label mb-5">PLANS</span>
            <h2>Simple, Straight Pricing</h2>
        </header>
        <div class="row row-lg justify-content-center">
            <div class="col-md col-lg-4">
                <div class="el-card el-plan el-plan-1">
                    <div class="el-plan-head">
                        <div class="price">
                            <span class="sign">$</span>
                            <span class="value">18</span>
                        </div>
                        <span class="title">Standard License</span>
                    </div>
                    <div class="el-plan-body">
                        <ul>
                            <li>1 end product</li>
                            <li>Use for personal or a client</li>
                            <li>Use in a free end product</li>
                            <li>6 months technical support</li>
                        </ul>
                        <a href="#" class="button button-md button-warning" target="_blank">Purchase now</a>
                    </div>
                </div>
            </div>
            <div class="col-md col-lg-4">
                <div class="el-card el-plan el-plan-1 bg-primary text-light">
                    <div class="el-plan-head">
                        <div class="price">
                            <span class="sign">$</span>
                            <span class="value">570</span>
                        </div>
                        <span class="title">Extended License</span>
                    </div>
                    <div class="el-plan-body">
                        <ul>
                            <li>1 end product</li>
                            <li>Use for personal or a client</li>
                            <li>Use in a free end product</li>
                            <li>Use in an end product that is <strong>sold</strong></li>
                            <li>6 months technical support</li>
                        </ul>
                        <a href="#" class="button button-md button-light" target="_blank">Purchase now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/-->


@endsection
