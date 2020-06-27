@extends('layouts.user-master-layout',['currentPage' => 'homepage'])
@section('page-title','Fashion Vietnam')
@section('content')
    <div class="thisishome">

    </div>
    <style>
        .thisishome {
            height: 700px;
            background-image: url({{asset("img/vietnamfashion.jpg")}});
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection
