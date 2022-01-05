@extends('layouts.afracode')

@section('content')

    <!--Blog-->
    <section class="section section-blog section-blog-1">
        <div class="pt-space pb-space">
            <div class="container pt-space">
                <header class="el-heading el-heading-1 center pb-space">
                    <span class="label mb-5">BLOG/NEWS</span>
                    <h2>Business News & Topics</h2>
                </header>
                <div class="row row-0">
                    <!--Item-->
                    @foreach(\App\Models\BlogNews::limit(10)->get() as $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="el-card el-card-blog el-card-blog-1">
                                <a href="blog-single-post-1.html" title="Fila Locker Room Varsity Jacket">
                                    <div class="image">
                                        <img src="{{$item->image_path}}" alt="Post thumbnail">
                                    </div>
                                    <div class="details">
                                        <h3>{{$item->title}}</h3>
                                        <p>{{$item->body}}</p>
                                        <span class="el-divider el-divider-line"></span>
                                        <div class="author">
                                            <img src="{{$item->author_image}}" alt="Author avatar">
                                            <h4 class="author-name">{{$item->author_name}}</h4>
                                            <p>Developer</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                <!--/-->
                    <!--Item-->

                </div>
            </div>
            <div class="el-pagination text-center pt-space">
                <ul>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li class="more">...</li>
                    <li>
                        <a href="#">25</a>
                    </li>
                    <li>
                        <a href="#">26</a>
                    </li>
                    <li class="next">
                        <a href="#">NEXT <i class="ti-control-forward"></i></a>
                    </li>
                </ul>
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
