@extends('layout.template')

@section('content')
<div>
    <div class="d-flex flex-column flex-root">
            <!--begin::List Widget 9-->
            <div class="text-left mb-5">
                <h2 class="text-left mb-3">
                    Riwayat Perizinan
                </h2>
            </div>
            <!--begin::Card-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1 me-5"></div>
                    </div>
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
                                <th class="min-w-120px">Nomor KIB</th>
                                <th class="min-w-210px">Tgl. KIB</th>
                                <th class="min-w-120px">KBLI</th>
                                <th class="min-w-250px">Jenis Penyelenggaraan</th>
                                <th class="min-w-120px">Media Transmisi</th>
                                <th class="text-end min-w-100px"></th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <td>Jaringan</td>
                            <td>59000000039</td>
                            <td>08/03/2021</td>
                            <td>61100</td>
                            <td>Penyelenggaraan Jaringan Tetap Tertutup</td>
                            <td>Fiber Optik Terestrial</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-minus"></i></a>
                                <a href="form-pengembalian-izin" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-secondary"><i class="fa fa-plus"></i></a>
                            </td>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
      
</div>
@endsection

@once
    @push('scripts')        
    <script src="{{asset('theme')}}/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>        
    @endpush
@endonce

