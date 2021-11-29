@extends('layout.template')

@section('content')
<div>
    <div class="d-flex flex-column flex-root">
            <!--begin::List Widget 9-->
            <div class="text-left mb-5">
                <h2 class="text-left mb-3">
                    PERIZINAN DALAM PROSES
                </h2>
            </div>
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1 me-5"></div>
                    </div>
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" 
                            data-bs-target="#kt_modal_izin_jartel">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                                <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Tambah</button>
                        <!--end::Button-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table id="kt_datatable_permohonan_perizinan" class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th hidden="hidden"></th>
                                <th class="min-w-120px">Jenis Izin</th>
                                <th class="min-w-120px">Tanggal Pengajuan</th>
                                <th class="min-w-120px">KBLI</th>
                                <th class="min-w-250px">Nama Izin</th>
                                <th class="min-w-250px">Batas Verifikasi</th>
                                <th class="min-w-120px">Status</th>
                                <th class="text-end min-w-100px"></th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">								
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

            <!--begin::Modal - Permohonan Perizinan-->
            @include('perizinan.form-perizinan')
            <!--end::Modal - Permohonan Perizinan-->
            
            <!--begin::Modal - Summary -->
            @include('perizinan.modal-summary-perizinan')
            <!--end::Modal - Summary -->																											
    </div>
    
    <!--begin::Modal next step -->
    @include('dashboard.modal-next-step')
    <!--end::Modal-->
    
    
    <!-- Modal ULO -->
    @include('ulo.form-ulo')
    <!--end::Modal ULO-->        
</div>
@endsection

@once
    @push('scripts')        
    <script src="{{asset('theme')}}/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="{{asset('theme')}}/js/kominfo/manajemen-perizinan/table-perizinan-dalam-proses.js" type="text/javascript"></script>
    <script src="{{asset('theme')}}/js/kominfo/manajemen-perizinan/form-izin-jartel.js" type="text/javascript"></script>
    @endpush
@endonce

