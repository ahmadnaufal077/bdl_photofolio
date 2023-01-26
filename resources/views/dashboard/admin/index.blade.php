@extends('layouts.dashboard')
@section('content')
@if(Session::get('level')==='superadmin')
      <h2>Admin</h2>
      <br/>
      <a href="/master/admin/create" class="btn btn-primary mx-1">Tambahkan</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name Actor</th>
              <th scope="col">Password</th>
              <th scope="col">Level</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->password }}</td>
              <td>{{ $row->level }}</td>
              <td class="d-flex">
              <a href="/master/admin/{{ $row->_id}}/edit" class="btn btn-warning mx-1"><span class="material-symbols-outlined"> edit </span></a>
                <form method="post" action="/master/admin/{{ $row->_id }}">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mx-1"  onclick="return confirm('Are you sure?');"><span class="material-symbols-outlined"> delete </span></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
@endif
@endsection