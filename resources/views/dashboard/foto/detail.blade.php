@extends('layouts.dashboard')
@section('content')
<div class="card" style="width: 18rem;">
  @if($data->image)
    <img src="{{ asset('storage/'.$data->image) }}" class="card-img-top" alt="">
  @else
    <img src="/asset/img/gallery/gallery-2.jpg" class="card-img-top" alt="...">
  @endif
  <div class="card-body">
    <h5 class="card-title">{{ $data->title }}</h5>
    <p class="card-text">{{ $data->deskripsi }}</p>
    <a href="/master/foto/{{ $data->_id}}/edit" class="btn btn-warning mx-1"><span class="material-symbols-outlined"> edit </span></a>
    <form method="post" action="/master/foto/{{ $data->_id }}">
        @method('delete')
        @csrf
        <button class="btn btn-danger mx-1"  onclick="return confirm('Are you sure?');"><span class="material-symbols-outlined"> delete </span></button>
    </form>
    
  </div>
</div>
@endsection