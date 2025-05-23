@extends('layouts.app')
@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
  <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 400px"
  >
    <h3 class="display-3 font-weight-bold text-white">Galeri</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="{{route('index')}}">Beranda</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">Galeri</p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- Gallery Start -->
<div class="container-fluid pt-5 pb-3">
  <div class="container">
    <div class="text-center pb-2">
      <p class="section-title px-5">
        <span class="px-2">Galeri Sekolah</span>
      </p>
      <h1 class="mb-4">Galeri Kegiatan Sekolah</h1>
    </div>
    <div class="row">
      <div class="col-12 text-center mb-2">
        <ul class="list-inline mb-4" id="portfolio-flters">
          <li class="btn btn-outline-primary m-1 active" data-filter="*">
            Semua
          </li>

          @foreach($tagData as $tag)
          <li class="btn btn-outline-primary m-1" data-filter=".{{$tag['slug']}}">
            {{$tag['nama']}}
          </li>
          @endforeach
          

        </ul>

      </div>
    </div>
    <div class="row portfolio-container">

        @foreach($gambarData as $gambar)
        <div class="col-lg-4 col-md-6 mb-4 portfolio-item {{$gambar['tag_slug']}}">
            <div class="position-relative overflow-hidden mb-2">
            <img class="img-fluid w-100" src="{{ asset('storage/' . $gambar['image']) }}" alt="" />
            <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
            >
                <a href="{{ asset('storage/' . $gambar['image']) }}" data-lightbox="portfolio">
                <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
            </div>
            </div>
        </div>
        @endforeach

    </div>
  </div>
</div>
<!-- Gallery End -->
@endsection