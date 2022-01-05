@extends('layouts.afracode')

@section('content')




    <!--Contact-->
    <section class="section section-contact section-contact-1">
        <div class="pt-space pb-sapce">
            <div class="container pt-space pb-space">
                <header class="el-heading el-heading-1 mb-space-half center">
                    <span class="label mb-5">CONTACT US</span>
                    <h2>Get in Touch Today</h2>
                </header>
                <div class="row pb-space">
                    <div class="col-md-8 col-lg-8 div-center">
                        <form class="form form-1" action="/test/store" method="post">
                            @csrf
                            <div class="row row-md">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-item">
                                        <label>Name</label>
                                        <input type="text" class="input-icon" name="name">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="form-item">
                                        <label>Email address</label>
                                        <input type="email" class="input-icon" name="email">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                                <circle cx="12" cy="12" r="4"></circle>
                                                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-item">
                                        <label>Your Message</label>
                                        <textarea name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="button button-lg button-block button-primary">
                                        <span class="text">Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/-->



@endsection
