@extends('layouts.app')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
  <div
    class="d-flex flex-column align-items-center justify-content-center"
    style="min-height: 400px"
  >
    <h3 class="display-3 font-weight-bold text-white">Tentang Kami</h3>
    <div class="d-inline-flex text-white">
      <p class="m-0"><a class="text-white" href="{{route('index')}}">Beranda</a></p>
      <p class="m-0 px-2">/</p>
      <p class="m-0">Tentang Kami</p>
    </div>
  </div>
</div>
<!-- Header End -->
  <!-- About Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Visi dan Misi Sekolah</h1>
  </div> 
    <div class="row align-items-center">
        <div class="col-lg-5 d-flex mt-3">
          <img
            class="img-fluid rounded w-100"
            src="{{ asset('image/header1.jpg') }}"
            alt=""
            style="object-fit: cover; height: 100%;"
          />
        </div>
      <div class="col-lg-7">
        <p class="section-title px-5">
          <span class="px-2">Sejarah Sekolah </span>
        </p>
        <p style="text-align: justify;">
          SDN 39 Pontianak Utara didirikan pada tahun 1979 sebagai bagian dari upaya 
          untuk meningkatkan akses pendidikan di wilayah Pontianak Utara. 
          Seiring dengan perkembangan dan peningkatan kebutuhan pendidikan 
          di daerah tersebut, SDN 39 terus berkomitmen untuk memberikan pendidikan yang berkualitas 
          bagi generasi muda.
        </p>
        <p class="section-title px-5">
          <span class="px-2">Visi Sekolah </span>
        </p>
        <div class="row pt-2 pb-4">
          <div class="col-6 col-md-8">
            <ul class="list-inline m-0">
              <li class="py-2 border-top border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Sekolah yang Berprofil Pelajar Pancasila
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Berprestasi serta Berwawasan IPTEK
              </li>
              <li class="py-2 border-bottom">
                <i class="fa fa-check text-primary mr-3"></i>Peduli serta Berbudaya Lingkungan Hidup
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End -->
<!-- Registration Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 mb-5 mb-lg-0">
        <h1 class="mb-4">Misi Sekolah</h1>
        <!--<p class="section-title pr-5">
          <span class="pr-2">Misi Sekolah</span>
        </p>-->
        <p style="text-align:justify;">
          Misi Sekolah merupakan pedoman yang menjadi acuan dalam penyelenggaraan pendidikan di SDN 39 Pontianak Utara.
          Misi ini juga mencerminkan komitmen sekolah untuk menciptakan lingkungan pendidikan yang
          berkualitas, inklusif, dan berorientasi pada pengembangan karakter peserta didik.
          
        </p>
        <ul class="list-inline m-0">
          <li class="py-2">
            <i class="fa fa-check text-primary mr-3"></i>Terciptanya suasana Ramah Anak dalam lingkungan sekolah
          </li>
          <li class="py-2">
            <i class="fa fa-check text-primary mr-3"></i>Berprestasi baik bidang akademik dan non-akademik
          </li>
          <li class="py-2">
            <i class="fa fa-check text-primary mr-3"></i>Membudayakan Karakter Profil Pelajar Pancasila 
          </li>
        </ul>
        <!--<a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>-->
      </div>
      <div class="col-lg-5 text-right">
        <img
          class="img-fluid rounded mb-5 mb-lg-0"
          src="{{asset('image\header2.jpg')}}"
          alt=""
        />
      </div>
    </div>
  </div>
</div>

@endsection