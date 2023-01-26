@extends('layouts.dashboard')
@section('content')

{{Session::get('nama')}}
{{Session::get('level')}}
    Selamat Datang Di PhotoFolio

@endsection