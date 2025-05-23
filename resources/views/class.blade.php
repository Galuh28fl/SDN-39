@extends('layouts.app')
@section('content')
<!-- Class Start -->


<div class="container-fluid bg-primary mb-5">
  <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 400px"
  >
    <h3 class="display-3 font-weight-bold text-white">Ekstrakurikuler</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="{{route('index')}}">Beranda</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">Ekstrakurikuler</p>
    </div>
  </div>
</div>
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Ekstrakurikuler</h1>
      <!--<p class="section-title px-5">
        <span class="pr-2">Ekstrakurikuler</span>
      </p>-->
    </div>
    <div class="row">

      @foreach($ekstraData as $ekstra)
      <div class="col-lg-4 mb-5">
        <div class="card border-0 bg-light shadow-sm pb-2">
          <img class="card-img-top mb-2" src="{{ asset('storage/' . $ekstra['image']) }}" alt="" />
          <div class="card-body text-center">
            <h4 class="card-title">{{$ekstra['judul']}}</h4>
            <p class="card-text">
              {{$ekstra['deskripsi']}}
            </p>
          </div>
          <div class="card-footer bg-transparent py-4 px-5">
            <div class="row border-bottom">
              <div class="col-6 py-1 text-left border-right">
                <strong>Ketentuan Kelas </strong>
              </div>
              <div class="col-6 py-1">{{$ekstra['ketentuan']}}</div>
            </div>
            <div class="row border-bottom">
              <div class="col-6 py-1 text-left border-right">
                <strong>Jumlah siswa</strong>
              </div>
              <div class="col-6 py-1">{{$ekstra['siswa']}} Siswa</div>
            </div>
            <div class="row border-bottom">
              <div class="col-6 py-1 text-left border-right">
                <strong>Jadwal Kelas</strong>
              </div>
              <div class="col-6 py-1">{{$ekstra['jadwal']}}</div>
            </div>
            <div class="row">
              <div class="col-6 py-1 text-left border-right">
                <strong>Waktu Kelas</strong>
              </div>
              <div class="col-6 py-1">{{$ekstra['waktu']}}</div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection