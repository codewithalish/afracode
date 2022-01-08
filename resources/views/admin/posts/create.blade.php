@extends('layouts.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">ایجاد پست
            </div>

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                @if($errors->any())
                    <div style="background-color: red;border: 1px solid black;">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/admin/posts" method="post">
                    @csrf

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">title</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="details">details</label>
                            <input class="form-control" id="details" type="text" placeholder="details"
                                   name="details">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="body">body</label>
                            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="body">image</label>
                            <input type="file">
                        </div>

                        <button type="submit">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
