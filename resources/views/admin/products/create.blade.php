@extends('layouts.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">ایجاد محصول
            </div>
            {{--            <div class="callout callout-info bg-white">اطلاعات پیج</div>--}}
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$cardTitle ?? ''}}</div>

                <form action="/admin/products" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">title</label>
                            <input class="form-control" id="title" type="text" placeholder="title" name="title">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">price</label>
                            <input class="form-control" id="price" type="number" placeholder="price" name="price">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="price">description</label>
                            <input class="form-control" id="description" type="text" placeholder="description" name="description">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="details">details</label>
                            <textarea class="form-control" id="details" rows="3" name="details"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="image_path">image</label>
                            <input type="file">
                        </div>

                        <button type="submit">Send</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection