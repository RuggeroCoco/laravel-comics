@extends('layouts.app')

@section('content')
    <h1>Hello</h1>

    <ul>
        @foreach ($comics as $item)
            <li>{{$item['series']}}</li>
        @endforeach
    </ul>
@endsection    