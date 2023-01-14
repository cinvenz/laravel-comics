@extends('guest.layouts.base')

@section('content')
    <ul>
        @foreach ($comics as $comic)
            <li>{{$comic['title']}}</li>
        @endforeach
    </ul>
@endsection
