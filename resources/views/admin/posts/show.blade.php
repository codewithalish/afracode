@extends('layouts.admin')
@section('content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="callout callout-info bg-white">اطلاعات پست
            </div>
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
                    <img src="{{$item->image_path }}" alt="{{$item->title}}">
                    <hr>
                    <strong>id:</strong>
                    <span>{{$item->id}}</span>
                    <hr>
                    <strong>title:</strong>
                    <span>{{$item->title}}</span>
                    <hr>
                    <strong>body:</strong>
                    <span>{{$item->body}}</span>
                    <hr>
                    <strong>details:</strong>
                    <span>{{$item->details}}</span>

                </div>
            </div>
        </div>
    </div>
@endsection
