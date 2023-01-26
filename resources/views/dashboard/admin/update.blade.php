@extends('layouts.dashboard')
@section('content')
@if(Session::get('level')==='superadmin')
<div class="card">
  <div class="card-body">
  <form action="/master/admin/{{ $admin->_id }}" method="post">
    <input type="hidden" name="_id" value="{{ $admin->_id }}">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name Acthor</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Acthor" value="{{ $admin->nama }}">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="{{ $admin->password }}">
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="level" id="flexRadioDefault1" value="superadmin">
          <label class="form-check-label" for="flexRadioDefault1">
          Super Admin
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="level" id="flexRadioDefault2" value="user">
          <label class="form-check-label" for="flexRadioDefault2">
          User
          </label>
      </div>

      <button type="submit" class="btn btn-primary mx-1">Tambahkan</button>
    </form>
  </div>
</div>
@endif
@endsection