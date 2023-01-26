@extends('layouts.main')
@section('content')

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container-fluid">
        <div class="row gy-4 justify-content-center mt-5" style='margin-top:100px !important;'>
          @foreach ($data as $foto)
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('storage/'.$foto->image) }}" class="img-fluid" alt="">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('storage/'.$foto->image) }}" title="{{ $foto->title }}" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="gallery-single/{{ $foto->_id }}" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
          @endforeach
        </div>


      </div>
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  @endsection()