@extends('layout.template')

@section('container')
<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
    Penambahan Jenis Penomoran
</h3>
<form id="kt_project_settings_form" class="form" action="{{ url('penomoran-submit') }}" method="post">
    @csrf <!-- {{ csrf_field() }} -->
    <div class="card">
        <div class="card-header" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light">Informasi & Status Permohonan</div>
        </div>
        <div class="card-body p-9">
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Informasi & Status Permohonan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ $perizinan['jenis_izin'] }}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Media Transmisi</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ $perizinan['media_transmisi'] }}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6"> Nomor Permohonan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ $perizinan['id'] }}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nama Perusahaan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ $perusahaan['nama'] }}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor NIB</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ auth()->user()->nama }}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kode KBLI</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ $perizinan['kbli'] }}</label>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Tanggal Pengajuan</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">{{ $perizinan['tanggal_kib'] }}</label>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light">Penomoran</div>
        </div>
        <div class="card-body p-9">
            <div class="row mb-4">
                <div class="col-xl-3 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor</label>
                </div>
                <div class="col-xl-1 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">:</label>
                </div>
                {{-- <div class="col-xl-6 fv-row">
                    <select class="form-select" data-control="select2" id="nomor" name="nomor" data-placeholder="Pilih Nomor" required>
                        <option></option>
                        <option value="021">Blok Nomor - 021</option>
                        <option value="0251">Blok Nomor - 0251</option>
                        <option value="0251">Blok Nomor - 0252</option>
                        <option value="021">NDC - 08180098364</option>
                        <option value="0251">NDC - 081398365622</option>
                        <option value="0251">NDC - 081700986464</option>
                    </select>
                </div> --}}
                <div class="col-xl-6 fv-row">
                    {{-- <label class="form-label fw-bolder text-dark fs-6">Pilih Nomor<em style="color: red">*</em></label> --}}
                        <select class="form-select" data-control="select2" id="availno" name="availno" data-placeholder="-- pilih nomor --" required>
                            <option></option>
                            @foreach ($availno as $data)
                                <option value="{{ $data->id_trx_penomoran }}">{{ $data->desc }} - {{ $data->list_nomor }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Surat Pernyataan (*)</label>
                <input class="form-control form-control-lg form-control" type="file" placeholder="" name="surat" autocomplete="off" accept="application/pdf"/>
            </div>
            <div class="fv-row mb-7">
                <div class="text-muted">Dengan ini saya menyatakan bahwa seluruh data yang disampaikan dalam SURAT PERNYATAAN adalah BENAR. Jika dikemudian hari data yang disampaikan terbukti tidak benar, maka kami siap menerima akibat hukum sesuai dengan ketentuan perundang-undangan</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-check form-check-custom form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">YA, SAYA SETUJU</span>
                </label>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Kembali</button>
            <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Submit</button>
        </div>
    </div>
</form>
@endsection