@extends('layouts.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>
                @include('layouts.partials.auth.alert')

                <form action="/admin/posts/{{$item->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">title</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title" value="{{$item->title}}">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="details">details</label>
                            <input class="form-control" id="details" type="text" placeholder="details" name="details" value="{{$item->details}}">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="body">body</label>
                            <textarea class="form-control" id="body" rows="3" name="body">{{$item->body}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="body">image</label>
                            <input type="file">
                        </div>

                        <button type="submit">ویرایش</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
