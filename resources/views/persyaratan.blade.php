@extends('layout.template')

@section('content')

<div class="d-flex flex-column flex-root">
    <!--begin::List Widget 9-->
    <div class="text-left mb-5">
        <h2 class="text-left mb-3">
            LAYANAN {{ $perizinan['jenis_izin'] }}
            <input type="hidden" name="perizinanId" id="perizinanId" value="{{ $perizinan['id'] }}">
        </h2>
    </div>
        
    <!--begin::Card Informasi & Status Permohonan-->
    <div class="card card-flush me-5 mb-10">
        <div class="card-body pt-5 px-20">
            <div class="form-group row">
                <h3 class="col-9">Informasi & Status Permohonan</h3>
                <div class="col-3">
                {{-- <b><label for="">Batas Waktu Pengisian: &nbsp;</label><label class="col-form-label fw-bold" id="countdown"></label>
                <label for="">&nbsp; detik</label></b> --}}
                </div>
            </div>			    	
            <div class="form-group row">
                <label  class="col-3 col-form-label">Nama Perusahaan</label>
                <div class="col-9">
                <span>:</span>
                <label class="col-form-label fw-bold" 
                    id= "namaPerusahaanText" th:value="{{ $perusahaan['nama'] }}" 										   		
                    th:text="{{ $perusahaan['nama'] }}"> {{ $perusahaan['nama'] }}
                </label>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-3 col-form-label">Nomor Induk Berusaha</label>
                <div class="col-9">
                <span>:</span>										    
                <label class="col-form-label fw-bold" 
                    id= "nomorNIBText" th:value="{{ auth()->user()->nib }}"
                    th:text="{{ auth()->user()->nib }}">{{ auth()->user()->nib }}</label>
                </div>
            </div>									   
            {{--     <div class="form-group row">
                <label  class="col-3 col-form-label">Nomor KIB</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="pemohonText" th:value="${applicationInfo.nomorKIB}"
                    th:text="${applicationInfo.nomorKIB}">{{ $perizinan['kode_izin'] }}</label>
                </div>
            </div>									   					 --}}
            <div class="form-group row">
                <label  class="col-3 col-form-label">Tgl. Pengajuan</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="tanggalPengajuanText" th:value="${#dates.format(applicationInfo.tanggalPengajuan, 'dd-MM-yyyy')}"
                    th:text="${#dates.format(applicationInfo.tanggalPengajuan, 'dd-MM-yyyy')}">{{ $perizinan['tanggal_kib'] }}</label>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-3 col-form-label">Jenis Perizinan</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="jenisPerizinanText" th:value="${applicationInfo.jenisPerizinan}"
                    th:text="${applicationInfo.jenisPerizinan}">{{ $perizinan['jenis_izin'] }}</label>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-3 col-form-label">Kode KBLI</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="kbliText" th:value="${applicationInfo.kbli}"
                    th:text="${applicationInfo.kbli}">{{ $perizinan['kbli'] }}</label>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-3 col-form-label">Jenis Layanan</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="jenisLayananText" th:value="${applicationInfo.jenisLayanan}"
                    th:text="${applicationInfo.jenisLayanan}">{{ $perizinan['jenis_penyelenggaraan'] }}</label>
                </div>										    										    
            </div>
            <div class="form-group row">
                <label  class="col-3 col-form-label">Nomor Perizinan</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="jenisLayananText" th:value="${applicationInfo.jenisLayanan}"
                    th:text="${applicationInfo.jenisLayanan}">{{ $perizinan['nomor_izin'] }}</label>
                </div>										    										    
            </div>
            {{-- <div class="form-group row">
                <label  class="col-3 col-form-label">Media Transmisi</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="jenisLayananText" th:value="${applicationInfo.mediaTransmisi}"
                    th:text="${applicationInfo.mediaTransmisi}">{{ $perizinan['media_transmisi'] }}</label>
                </div>										    										    
            </div>
            <div class="form-group row">
                <label  class="col-3 col-form-label">No. Permohonan</label>
                <div class="col-9">
                <span>:</span>
                <label  class="col-form-label fw-bold"
                    id="nomorPermohonanText" th:value="${applicationInfo.nomorPermohonan}"
                    th:text="${applicationInfo.nomorPermohonan}"></label>
                </div>										    										    
            </div>						 --}}
        </div>										
    </div>
    <!--end::Card Informasi & Status Permohonan-->
    
    <!-- begin::Penyelenggaraan Jaringan Tetap Tertutup -->
    @if ($perizinan->kode_izin === '59000000034')  
        @include('persyaratan.form-kplt-jartup-terestrial')
    @elseif ($perizinan->kode_izin === '59000000040')
        @include('persyaratan.form-kplt-jartup-skkl')
    @elseif ($perizinan->kode_izin === '59000000062')
        @include('persyaratan.form-kplt-jartup-microwave')
    @elseif ($perizinan->kode_izin === '59000000035')
        @include('persyaratan.form-kplt-jartup-satelit')
    @elseif ($perizinan->kode_izin === '59000000045')
        @include('persyaratan.form-kplt-jartup-vsat')
    <!--end::Penyelenggaraan Jaringan Tetap Tertutup -->
    @elseif ($perizinan->kode_izin === '59000000041')
        <!--begin::Penyelenggaraan Jaringan Tetap Lokal Berbasis Packet Switched -->
        @include('persyaratan.form-kplt-jartap-lbps')
        <!--end::Penyelenggaraan Jaringan Tetap Lokal Berbasis Packet Switched -->
    @elseif ($perizinan->kode_izin === '59000000065')
        <!--begin::Penyelenggaraan Jaringan Bergerak Terestrial Radio Trunking -->
        @include('persyaratan.form-kplt-pjb-trt')
        <!--end::Penyelenggaraan Jaringan Bergerak Terestrial Radio Trunking-->
    @elseif ($perizinan->kode_izin === '59000000046')
        <!--begin::Penyelenggaraan Jaringan Bergerak Satelit -->
        @include('persyaratan.form-kplt-pjb-satelit')
        <!--end::Penyelenggaraan Jaringan Bergerak Satelit-->
    @elseif ($perizinan->kode_izin === '59000000066')
        <!--begin::Penyelenggaraan Jaringan Bergerak Satelit -->
        @include('persyaratan.form-telsus')
        <!--end::Penyelenggaraan Jaringan Bergerak Satelit-->
    @else
        <!--No Form -->
    @endif
            
    <!--begin::Komitmen Kinerja Layanan -->
    @include('persyaratan.form-komitmen-kinerja')
    <!--end::Komitmen Kinerja Layanan-->
    
    <!--begin::Formulir Data Alat/Teknis-->
    @include('persyaratan.form-data-alat-teknis')
    <!--end::Formulir Data Alat/Teknis-->		
        
    {{-- @if ($perizinan->badan_hukum)   --}}
    {{-- @if (auth()->user()->login_type=="Telsus")   --}}
    
    {{-- @include('persyaratan.form-dokumen-nbh') --}}
    @if ($perizinan->kode_izin === '59000000066')
        <!--begin::Document Upload Badan Hukum-->
        @include('persyaratan.form-dokumen-bh')
        <!--end::Document Upload Badan Hukum-->
    @else
        <!--begin::Document Upload-->
        @include('persyaratan.form-dokumen-nbh')
        <!--end::Document Upload-->
    @endif
</div>				
	
	<!--begin::Modal Confirmation-->	
	@include('persyaratan.modal-konfirmasi')
	<!--end::Modal Confirmation-->									

    <!--begin::Modal - Summary -->
    @include('persyaratan.modal-summary')
    <!--end::Modal - Summary -->		

@endsection

@once
    @push('scripts')    
    <script src="{{asset('theme')}}/js/kominfo/persyaratan/form-persyaratan.js" type="text/javascript"></script>		
    @endpush
@endonce
