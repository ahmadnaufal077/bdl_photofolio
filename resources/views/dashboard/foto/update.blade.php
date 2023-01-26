@extends('layouts.dashboard')
@section('content')
<div class="card">
  <div class="card-body">
    <form action="/master/foto/{{ $foto->_id }}" method="post" enctype="multipart/form-data">
      <input type="hidden" name="_id" value="{{ $foto->_id }}">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name Acthor</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Acthor" value="{{ $foto->nama }}">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ $foto->title }}">
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input class="form-control" type="file" accept="image/png, image/jpg, image/jpeg" id="image" name="image" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" value="{{ $foto->deskripsi }}" rows="6"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mx-1">Tambahkan</button>
    </form>
  </div>
</div>
@endsection