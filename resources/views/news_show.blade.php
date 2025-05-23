@extends('layouts.app')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
  <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 400px"
  >
    <h3 class="display-3 font-weight-bold text-white">Berita Sekolah</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="{{route('index')}}">Beranda</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0"><a class="text-white" href="{{route('news')}}">Artikel</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">{{$artikelData['judul']}}</p>
    </div>
  </div>
</div>
<!-- Header End -->

<!-- Detail Start -->
<div class="container py-5">
  <div class="row pt-5">
    <div class="col-lg-12">
      <div class="d-flex flex-column align-items-center text-center mb-3">
        <h1 class="mb-3">{{$artikelData['judul']}}</h1>
          <!-- <div class="d-flex">
            <p class="mr-3"><i class="fa fa-user text-primary"></i>Lomba Akademik</p>
            <p class="mr-3">
              <i class="fa fa-folder text-primary"></i> 20-03-2007
            </p>
          </div>-->
          <div class="mb-5">
            <img
              class="img-fluid rounded w-100 mb-4"
              src="{{asset('storage/' . $artikelData['image'])}}"
              alt="Image"
            />
            <p style="text-align: justify;">
              {!! $artikelData['content'] !!}
            </p>
          </div>
        </div>
    </div>
  </div>
</div>    
@endsection