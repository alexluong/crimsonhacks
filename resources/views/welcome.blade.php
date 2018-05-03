@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
            <p>Welcome to CrimsonHacks 2019</p>
        @else
            <p>Hello, {{ Auth::user()->name }} </p>
        @endguest
    </div>
@endsection