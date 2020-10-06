@extends('master')

@section('title')
Load page 
@endsection 

@section('main')

    <link rel="stylesheet" href="{{('css/load.css') }}">

    <div class="content-1">
        <div class="container">
            <div class="content-left">
                <h3>Welcome To my Website</h3>
                <h6>Hai Selamat Datang! mohon maaf apabila tampilan dan design dari website ini sangat kurang memuaskan</h6>
                <button type="button" class="btn btn-primary"><a href="{{ url('/login') }}">Login Here</a> </button>
            </div>
        </div>
    </div>
@endsection