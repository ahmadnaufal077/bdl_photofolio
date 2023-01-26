@extends('layouts.dashboard')
@section('content')
      <h2>Post Gallery</h2>
      <br/>
      <a href="/master/foto/create" class="btn btn-primary mx-1">Tambahkan</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name Actor</th>
              <th scope="col">Title</th>
              <th scope="col">Descripsi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $row->nama }}</td>
              <td>{{ $row->title }}</td>
              <td>{{ $row->deskripsi }}</td>
              <td><a href="/master/foto/{{ $row->_id }}/detail" class="btn btn-primary mx-1"><span class="material-symbols-outlined"> edit </span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
 @endsection