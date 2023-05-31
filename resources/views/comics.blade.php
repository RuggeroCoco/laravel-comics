@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Comics</h2>
            <div class="row row-cols-4 g-4">
            @foreach ($comics as $item)
            <div class="col">
                <div class="card">
                    <img src="{{$item['thumb']}}" alt="">
                    <div class="card-body">
                        <h5>{{$item['series']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection