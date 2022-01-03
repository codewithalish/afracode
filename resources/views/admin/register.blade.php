@extends('admin.loginMaster')
@section('content')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.27.7'><\/script>".replace("HOST", location.hostname));
        //]]></script>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @include('admin.partials.alert')
                    <form action="/admin/register" method="post">
                        @csrf
                        <div class="card-group d-block d-md-flex row">
                            <div class="card col-md-7 p-4 mb-0">
                                <div class="card-body">
                                    <h1>Login</h1>
                                    <p class="text-medium-emphasis">Sign In to your account</p>
                                    <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="/afracode/admin/login/node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                      </svg></span>
                                        <input class="form-control" type="text" placeholder="name" name="name">
                                    </div>
                                    <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="/afracode/admin/login/node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                      </svg></span>
                                        <input class="form-control" type="text" placeholder="Username" name="email">
                                    </div>
                                    <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="/afracode/admin/login/node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                      </svg></span>
                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <button class="btn btn-primary px-4" type="submit">ثبت نام</button>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-5 text-white bg-primary py-5">
                                <div class="card-body text-center">
                                    <div>
                                        <h2>Sign up</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href="/admin/login">
                                        <button class="btn btn-lg btn-outline-light mt-3" type="button">login Now!</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
