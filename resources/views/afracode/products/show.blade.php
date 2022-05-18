@extends('layouts.afracode')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">

            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header">{{$titleCard ?? ''}}</div>
                <div class="card-body">
<!--                    --><?php //defaultImage($item->image_path) ?>
                    <img src="{{$item->image_path ?? '/images/default.jpg' }}" alt="{{$item->title ?? ''}}">
                    <hr>
                    <strong>id:</strong>
                    <span>{{$item->id ?? ''}}</span>
                    <hr>
                    <strong>title:</strong>
                    <span>{{$item->title ?? ''}}</span>
                    <hr>
                    <strong>price:</strong>
                    <span>{{$item->price ?? ''}}</span>
                    <hr>
                    <strong>description:</strong>
                    <span>{{$item->description ?? ''}}</span>
                    <hr>
                    <strong>details:</strong>
                    <span>{{$item->details ?? ''}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
