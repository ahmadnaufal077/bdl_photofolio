@extends('layouts.main')
@section('content')

    <!-- ======= Gallery Single Section ======= -->
    <section id="gallery-single" class="gallery-single">
      <div class="container">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">
              @foreach ($data as $row)
              <div class="swiper-slide">
                <img src="{{ asset('storage/'.$row->image) }}" alt="">
              </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>{{$foto->title}}</h2>
              <p>
                {{$foto->deskripsi}}
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong> <span>Anime</span></li>
                <li><strong>Client</strong> <span>{{$foto->nama}}</span></li>
                <li><strong>Project date</strong> <span>{{$foto->created_at}}</span></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Single Section -->

  </main><!-- End #main -->

  @endsection()