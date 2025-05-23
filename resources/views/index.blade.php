<style>
.list-group-item {
  display: flex;
  align-items: center;
  gap: 16px; /* tambahkan ini untuk beri jarak antara badge dan teks */
  padding: 16px;
  margin-bottom: 10px;
  border-radius: 8px;
  transition: all 0.3s ease;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}
.list-group-item:hover {
  background-color: #f8f9fa;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  cursor: pointer;
}
.list-group-item strong {
  line-height: 1.4;
}

.badge {
  font-size: 1rem;
  padding: 0.5rem 0.75rem;
}


.navbar {
  position: sticky;
  top: 0;
  z-index: 1000; /* ensures the navbar stays on top of other content */
}
.navbar {
  position: sticky;
  top: 0; /* Makes it stick at the top of the page */
  z-index: 1020; /* Ensure it stays on top of other content */
  width: 100%;
  background-color: #fff !important; /* Set the background to avoid transparency */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Optional: adds subtle shadow */
}

.btn-lebih:hover {
  color: #0056b3; /* warna biru lebih tua */
  text-decoration: underline;
  transition: all 0.2s ease-in-out;
}
.fasilitas-card {
  transition: background-color 0.3s, color 0.3s;
}

.fasilitas-card:hover {
  background-color: #06A3DA; /* ganti dengan warna biru utama proyek */
  color: #fff !important;
}

.fasilitas-card:hover h3,
.fasilitas-card:hover i {
  color: #fff !important;
}

</style>
@extends('layouts.app')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
  <div class="row align-items-center px-3">
    <div class="col-lg-6 text-center text-lg-left">
      <h4 class="text-white mb-4 mt-5 mt-lg-0">Selamat Datang di SDN 39 Pontianak Utara</h4>
      <p style="text-align: justify;" class="text-white mb-4 ">
        SDN 39 Batu Layang adalah sekolah berprestasi yang berkomitmen memberikan 
        pendidikan berkualitas, dengan mengutamakan pengembangan potensi siswa melalui 
        berbagai program akademik dan kegiatan ekstrakurikuler.
      </p>
      <a href="{{ route('about') }}" class="btn btn-secondary mt-1 py-3 px-5">Pelajari Lebih Lanjut</a>
    </div>
    <div class="col-lg-6 text-center text-lg-right">
      <img class="img-fluid mt-5 mb-5" src="{{asset('image\fotoguru.jpg')}}" alt="" />
    </div>
  </div>
</div>
<!-- Header End -->

<!-- Facilities Start -->
<div class="container-fluid pt-5">
  <div class="container pb-3">
    <div class="text-center pb-2">
        <h1 class="mb-4">Fasilitas Sekolah</h1>
      <p class="section-title px-5">
        <span class="px-2">Fasilitas Sekolah SDN 39 Pontianak Utara</span>
    </p>
    </div> 
    <div class="row">
      <!-- Fasilitas yang benar -->
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-2" style="padding: 15px 20px">
          <i class="flaticon-032-book h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4 mt-2">
              <h3>Perpustakaan </h3>
              <p class="m-0"></p>
          </div>
        </div>
      </div>
      <!-- Facilities yang benar -->

      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-2" style="padding: 15px 20px">
          <i class="flaticon-018-ball h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4 mt-2">
              <h3>Lapangan Voli</h3>
              <p class="m-0"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-2" style="padding: 15px 20px">
          <i class="flaticon-001-swing h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4 mt-2">
              <h3>Tempat Bermain</h3>
              <p class="m-0"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-2" style="padding: 15px 20px">
          <i class="flaticon-049-cutlery h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4 mt-2">
              <h3>Kantin Sekolah </h3>
              <p class="m-0"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-2" style="padding: 15px 20px">
          <i class="flaticon-016-apple h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4 mt-2">
              <h3>Mini Garden</h3>
              <p class="m-0"></p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 pb-1">
        <div class="d-flex bg-light shadow-sm border-top rounded mb-2" style="padding: 15px 20px">
          <i class="flaticon-002-bricks h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4 mt-2">
              <h3>Bank Sampah</h3>
              <p class="m-0"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Facilities Start -->

<!-- About Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Sejarah dan Visi Sekolah</h1>
    </div>
    <!-- Mulai row dengan stretch tinggi -->
    <div class="row align-items-stretch">
      
      <!-- Kolom Gambar -->
      <div class="col-lg-5 d-flex mt-3">
        <img
          class="img-fluid rounded w-100"
          src="{{ asset('image/header1.jpg') }}"
          alt=""
          style="object-fit: cover; height: 100%;"
        />
      </div>

      <!-- Kolom Konten -->
      <div class="col-lg-7 d-flex flex-column justify-content-between bg-white p-4">
        <div>
          <p class="section-title px-5">
            <span class="px-2">Sejarah Sekolah</span>
          </p>
          <p style="text-align: justify;">
            SDN 39 Pontianak Utara merupakan bagian dari upaya pemerintah
            untuk meningkatkan akses pendidikan di wilayah Pontianak Utara. 
            Seiring dengan perkembangan dan peningkatan kebutuhan pendidikan 
            di daerah tersebut, SDN 39 terus berkomitmen untuk memberikan pendidikan yang berkualitas 
            bagi generasi muda.
          </p>

          <p class="section-title px-5">
            <span class="px-2">Visi Sekolah</span>
          </p>
          <div class="row pt-2 pb-4">
            <div class="col-12">
              <ul class="list-unstyled m-0">
                <li class="py-2 border-top border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Sekolah yang Berprofil Pelajar Pancasila
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Berprestasi serta berwawasan IPTEK
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Peduli serta Berbudaya Lingkungan Hidup
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Tombol di bagian bawah konten -->
      </div>

    </div>
  </div>
</div>

  <!-- Registration Start 
<div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <h1 class="mb-4">Misi Sekolah</h1>
            <p class="section-title pr-5">
            <span class="pr-2">Misi Sekolah</span>
          </p>
          <p>
            Membudayakan Karakter Profil Pelajar Pancasila , 
            Beriman dan bertakwa pada Tuhan yang Maha Esa dan Berakhlak mulia,
            berkepribadian global, gotong royong, kreatif dan bernalar kritis
          </p>
          <ul class="list-inline m-0">
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Terciptanya suasana Ramah Anak dalam lingkungan sekolah.
            </li>
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Berprestasi baik bidang akademik dan non-akademik.
              amet ipsum
            </li>
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
              elitripsum vero.
            </li>
          </ul>
            <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
        </div>
        <div class="col-lg-5 text-right">
          <img
            class="img-fluid rounded mb-5 mb-lg-0"
            src="img/about-1.jpg"
            alt=""
          />
        </div>
      </div>
    </div>
</div>
  Registration End -->
  <!-- Related Post -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Artikel Sekolah </h1>
      <p class="section-title px-5">
        <span class="px-2">Artikel Sekolah</span>
      </p>
        <div class="mb-5 mx-n3">
          <div class="owl-carousel post-carousel position-relative">

          @foreach($artikelData as $artikel)
          <div class="d-flex align-items-center bg-light shadow-sm rounded overflow-hidden mx-3" style="padding: 6px;">
            <a href="{{ route('newsShow', ['id' => $artikel['id']]) }}">
            <img
              class="img-fluid"
              src="{{ asset('storage/' . $artikel['image']) }}"
              style="width: 80px; height: 80px"/>
            </a>

            <div class="pl-3">
                <h5 class="mb-1">
                  <a href="{{ route('newsShow', ['id' => $artikel['id']]) }}">
                    {{ $artikel['judul'] }}
                  </a>
                </h5>
              <div class="d-flex">
                <small class="mr-3">
                  <i class="fa fa-folder text-primary"></i> {{ $artikel['tanggal'] }}
                </small>
              </div>
            </div>
          </div>
          @endforeach


          </div>
        </div>
    </div>
  </div>
</div>
<!-- Related Post End -->

  <!-- Pengumuman start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Pengumuman </h1>
      <p class="section-title px-5">
        <span class="px-2">Pengumuman SDN 39 Pontianak Utara </span>
      </p>
    </div>
      <div class="row justify-content-center">
        <div class="col-md-10">
          <ul class="list-group list-group-flush shadow-sm" style="font-family: 'Nunito', sans-serif;">
            @foreach($pengumumanData as $pengumuman)
            <li class="list-group-item d-flex align-items-center p-3">
              <span class="shadow-sm bg-white text-primary fw-bolder me-3 d-inline-flex justify-content-center align-items-center"
                  style="width: 45px; height: 45px; border-radius: 10px; font-size: 20px; font-weight: 800;">
                  {{ $loop->iteration }}
              </span>
              <strong class="text-dark ms-5">{{$pengumuman['content']}}</strong>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
  </div>
</div>
<!-- Pengumuman end -->

<!-- Class Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Ekstrakurikuler </h1>
      <p class="section-title px-5">
        <span class="px-2">Ekstrakurikuler SDN 39 Pontianak Utara</span>
      </p>
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
     <div class="row">
      <div class="col-12 d-flex justify-content-end">
          <a href="{{ route('class') }}" class="btn-lebih fw-bold text-decoration-none">Lihat Semua Ekstrakurikuler &raquo;</a>          
      </div> 
    </div> 
  </div>
</div>
<!-- Class End -->

<!-- Team Start 
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
        <h1 class="mb-4">Tenaga Kependidikan</h1>
      <p class="section-title px-5">
        <span class="px-2">Tenaga Kependidikan SDN 39 Batu Layang</span>
      </p>
    </div> 
    <div class="row">
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div
          class="position-relative overflow-hidden mb-4"
          style="border-radius: 100%"
        >
          <img class="img-fluid w-100" src="{{asset('image\empty.jpg')}}" alt="" />
          <div
            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
          >
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-outline-light text-center px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </div>
        <h4>Anna hanin </h4>
        <i>Guru Tematik</i>
      </div>
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div
          class="position-relative overflow-hidden mb-4"
          style="border-radius: 100%"
        >
          <img class="img-fluid w-100" src="{{asset('image\empty.jpg')}}" alt="" />
          <div
            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
          >
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-outline-light text-center px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </div>
        <h4>Amir Kasidi</h4>
        <i>Guru Matematika</i>
      </div>
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div
          class="position-relative overflow-hidden mb-4"
          style="border-radius: 100%"
        >
          <img class="img-fluid w-100" src="{{asset('image\empty.jpg')}}" alt="" />
          <div
            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
          >
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-outline-light text-center px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </div>
        <h4>Febi Kusuma</h4>
        <i>Guru Seni</i>
      </div>
      <div class="col-md-6 col-lg-3 text-center team mb-5">
        <div
          class="position-relative overflow-hidden mb-4"
          style="border-radius: 100%"
        >
          <img class="img-fluid w-100" src="{{asset('image\empty.jpg')}}" alt="" />
          <div
            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute"
          >
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-twitter"></i
            ></a>
            <a
              class="btn btn-outline-light text-center mr-2 px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              class="btn btn-outline-light text-center px-0"
              style="width: 38px; height: 38px"
              href="#"
              ><i class="fab fa-linkedin-in"></i
            ></a>
          </div>
        </div>
        <h4>Fanindya Kiranti</h4>
        <i>Guru Bahasa Indonesia</i>
      </div>
    </div>
  </div>
</div>Team End -->
<!-- Blog Start -->
<div class="container-fluid pt-5">
  <div class="container">
    <div class="text-center pb-2">
      <h1 class="mb-4">Kegiatan dan Agenda Sekolah</h1>
      <p class="section-title px-5">
        <span class="px-2">Kegiatan Sekolah</span>
      </p>
    </div>
    <div class="row pb-3">

        @foreach($kegiatanData as $kegiatan)
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">

                <img class="card-img-top mb-2" src="{{ asset('storage/' . $kegiatan['image']) }}" alt="" />

            <div class="card-body bg-light text-center p-4">

                <h4 class="">{{$kegiatan['judul']}}</h4>
                <div class="d-flex justify-content-center mb-3">
                <small class="mr-3"
                    ><i class="fa fa-user text-primary"></i>{{$kegiatan['tag']}}</small
                >
                <small class="mr-3"
                    ><i class="fa fa-folder text-primary"></i> {{$kegiatan['tanggal']}}</small
                >
                </div>
                <p>
                  {{$kegiatan['deskripsi']}}
                </p>
                 <!-- Team End <a href="{{route('activity')}}" class="btn btn-primary px-4 mx-auto my-2"
                >Baca lebih lanjut > </a -->
                
            </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="row">
      <div class="col-12 d-flex justify-content-end">
          <a href="{{ route('activity') }}" class="btn-lebih fw-bold text-decoration-none">Lihat Semua Kegiatan &raquo;</a>          
      </div> 
    </div> 

  </div>
</div>

@endsection