<style>
  .input-group-text {
    cursor: pointer;
  }

  .input-group-text:hover i {
    color: #0d6efd;
    transform: scale(1.2);
    transition: transform 0.2s, color 0.2s;
  }

  .input-group-text:active i {
    color: #0a58ca;
    transform: scale(0.95);
  }
</style>
@extends('layouts.app')
@section('content')
<!-- search form -->
<div class="container-fluid pt-5">
  <div class="container"> <!-- Make this match the container below -->
    <div class="row justify-content-center">
      <div class="col-lg-12"> <!-- Make this 12-columns wide -->

        <form method="GET" action="{{ route('news') }}">
          <div class="input-group">
            <input
              type="text"
              name="search"
              class="form-control form-control-lg"
              placeholder="Cari berdasarkan judul"
              value="{{ request('search') }}"
            />
            <button class="input-group-text bg-transparent text-primary" type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
<!-- search form End -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Artikel-Artikel sekolah </h1>
      <p class="section-title px-5">
        <span class="px-2">Artikel Sekolah</span>
      </p>
    </div>
    <div class="row pb-3">

      @foreach($artikelData as $artikel)
      <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow-sm mb-2">
          <img class="card-img-top mb-2" src="{{ asset('storage/' . $artikel['image']) }}" alt="" />
          <div class="card-body bg-light text-center p-4">
            <h4 class="">{{ $artikel['judul'] }}</h4>
            <div class="d-flex justify-content-center mb-3">
              <small class="mr-3"
                ><i class="fa fa-folder text-primary"></i> {{ $artikel['tanggal'] }}</small
              >
            </div>
            <p>
              {{ $artikel['deskripsi'] }}
            </p>
            <a href="{{ route('newsShow', ['id' => $artikel['id']]) }}" class="btn btn-primary px-4 mx-auto my-2"
              >Baca lebih lanjut</a
            >
          </div>
        </div>
      </div>
      @endforeach
      
      <div class="col-md-12 mb-4">
        <div class="d-flex justify-content-center">
          {{ $artikelData->links() }}
        </div>
      </div>

    </div>
  </div>
</div>
@endsection