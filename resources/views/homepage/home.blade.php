@extends('layout.template-home')

@section('container')

{{-- <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(img/banner/image17.png)">
    <div class="d-flex flex-column flex-center min-h-350px min-h-lg-500px px-9 mb-10">
        <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
            <h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">KOMINFO</h1>
        </div>
    </div>
</div> --}}
{{-- <div class="container-fluid px-0">
        <img src="https://mdbootstrap.com/img/Photos/Others/images/76.jpg" alt="placeholder 960" class="img-responsive" />
  </div> --}}
<div class="mb-n10 mb-lg-n20 z-index-2">
    <div class="container">
        <div class="text-center mb-17">
            {{-- <h3 class="fs-lg-3 text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Bagi pelaku usaha yang sudah memiliki Hak Akses dan NIB dari sistem OSS, silahkan masuk menggunakan user name dan password yang sudah ada</h3> --}}
            <h3 class="fs-lg-3 text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Perizinan Telekomunikasi</h3>
            {{-- <div class="fs-5 text-muted fw-bold">Perizinan Telekomunikasi</div> --}}
            {{-- <div class="fs-6 text-muted fw-bold">OSS - RBA</div> --}}
            <h3 class="fs-lg-3 text-dark mb-5"  data-kt-scroll-offset="{default: 100, lg: 150}">OSS - RBA</h3>
        </div>
        <div class="row w-100 gy-10 mb-md-20">
            <div class="col-md-6 px-5">
                <div class="text-center mb-10 mb-md-0">
                    <a href="login/jarjastel" target="__blank">
                        <img src="img/img-12.jpg" class="mh-150px mb-9" alt="" />
                        <div class="d-flex flex-center mb-5">
                            <div class="fs-3 fw-bolder text-dark">Jasa & Jaringan Telekomunikasi</div>
                        </div>
                        {{-- <div class="fw-bold fs-6 text-muted">Menyediakan beasiswa sekolah menengah pertama 
                            selama 3 tahun untuk komunitas yang membutuhkan 
                            yang tercatat sebagai masyarakat di kota Surabaya. </div> --}}
                    </a>
                </div>
            </div>
            <div class="col-md-6 px-5">
                <div class="text-center mb-10 mb-md-0">
                    <a href="login/telsusbh" target="__blank">
                        <img src="img/img-20.jpg" class="mh-150px mb-9" alt="" />
                        <div class="d-flex flex-center mb-5">
                            <div class="fs-3 fw-bolder text-dark">Telekomunikasi Khusus - Badan Hukum</div>
                        </div>
                        {{-- <div class="fw-bold fs-6 text-muted">Pemberian masker dan sembako kepada Komunitas, Driver Ojek Online, Pedagang Kaki Lima (PKL), Buruh Harian, Wartawan serta Masyarakat terdampak bencana alam </div> --}}
                    </a>
                </div>
            </div>
            {{-- <div class="col-md-4 px-5">
                <div class="text-center mb-10 mb-md-0">
                    <a href="login-telsusnbh" target="__blank">
                        <img src="img/img-22.jpg" class="mh-150px mb-9" alt="" />
                        <div class="d-flex flex-center mb-5">
                            <div class="fs-3 fw-bolder text-dark">Telekomunikasi Khusus - Instansi Pemerintah</div>
                        </div>
                    </a>
                </div> --}}
            {{-- </div> --}}
            {{-- <div class="col-md-4 px-5">
                <div class="text-center mb-10 mb-md-0">
                    <a href="form-penomoran" target="__blank">
                        <img src="img/img-23.jpg" class="mh-150px mb-9" alt="" />
                        <div class="d-flex flex-center mb-5">
                            <div class="fs-3 fw-bolder text-dark">Penomoran Non Telekomunikasi</div>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
        <!--end::Product slider-->
    </div>
    <!--end::Container-->
</div>
@endsection