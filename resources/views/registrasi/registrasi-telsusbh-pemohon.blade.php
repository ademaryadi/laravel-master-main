@extends('layout.template')

@section('container')
<div class="card">
    <div class="card-header" style="background-color: #600A88 !important;">
        <div class="card-title fs-3 fw-bolder text-light">PENDAFTARAN - DATA DIREKTUR</div>
    </div>
    <form id="kt_project_settings_form" class="form" action="{{ action('Sendemail@konfirmasi_telsusbh') }}" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="card-body p-9">
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nama Pemohon*</label>
                <input class="form-control form-control-lg form-control" type="text" placeholder="Masukan Nama Lengkap" required name="name" autocomplete="off" />
                <div class="text-muted">Nama Pemohon adalah nama penerima kuasa untuk mengurus izin. Jika pemohon adalah Direktur Perusahaan, maka nama pemohon adalah nama Direktur.</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Email Pemohon*</label>
                <input class="form-control form-control-lg form-control-solid"  type="email" placeholder="Masukan Alamat Email" required name="email" autocomplete="off" />
                <div class="text-muted">Pastikan alamat email yang Anda masukkan sudah benar. SK izin yang telah diterbitkan akan dikirimkan melalui alamat email diatas. Email permohon adalah email yang diberikan kuasa, dan jika pemohon adalah seorang direktur, maka email pemohon adalah email direktur. Email juga digunakan untuk login ke dalam sistem</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nomor Telepon/Handphone Pemohon*</label>
                <input class="form-control form-control-lg form-control-solid"  type="text" placeholder="" name="phone" autocomplete="off" />
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor KTP Pemohon*</label>
                        <input class="form-control form-control-lg form-control"  type="text" placeholder="" name="nik" autocomplete="off" />
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Upload KTP Pemohon*</label>
                        <input class="form-control form-control-lg form-control"  type="file" placeholder="" name="nik_up" autocomplete="off" accept="application/pdf" />
                </div>
                
                <div class="text-muted">KTP Pemohon adalah KTP penerima kuasa untuk mengurus izin. Jika pemohon adalah Direktur Perusahaan, maka KTP pemohon adalah KTP Direktur.</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Jabatan*</label>
                <input class="form-control form-control-lg form-control-solid"  type="text" placeholder="" name="jabatan" autocomplete="off" />
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Kartu Pegawai/Surat Keterangan Bekerja*</label>
                <input class="form-control form-control-lg form-control-solid"  type="file" placeholder="" name="kartu" autocomplete="off" accept="application/pdf"/>
            </div>
            <hr>
            <div class="fv-row mb-7">
                <div class="text-muted">Dengan ini saya menyatakan : Informasi dan dokumen yang dilampirkan adalah benar sesuai dengan dokumen asli. Apabila informasi dan dokumen yang dilampirkan tidak benar dan tidak sesuai dengan dokumen asli, maka saya bersedia dikenakan sanksi berupa masuk ke dalam daftar hitam (blacklist) hingga sanksi yang diatur dalam peraturan perundang-undangan.</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-check form-check-custom form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="ceksyarat" name="toc" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">Dengan membubuhkan cek list, saya telah membaca dan menyetujui ketentuan di atas.</span>
                </label>
            </div>
            <div class="fv-row mb-4">
                <div class="g-recaptcha" data-sitekey="6LfFNQkdAAAAAFXLESoqX4MXCtrQiB23mIxGq9SJ"></div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Kembali</button>
            <button type="submit" class="btn btn-secondary" id="kt_registrasi_submit">Submit</button>
        </div>
    </form>
</div>
<script>
    $('#ceksyarat').change(function () {
        // alert('changed');
        if ($('#ceksyarat').is(':checked')) {
            $("#kt_registrasi_submit").removeAttr("disabled");
            $('#kt_registrasi_submit').removeClass('btn-secondary');
            $('#kt_registrasi_submit').addClass('btn-primary');
        }else{
            $('#kt_registrasi_submit').prop('disabled', true);
            $('#kt_registrasi_submit').removeClass('btn-primary');
            $('#kt_registrasi_submit').addClass('btn-secondary');

        }
    });
    // $('#npwp').change(function () {
    //     // alert('changed');
    //     var npwp = document.getElementById("npwp").files[0].name;
    //     if (npwp=="") {
    //         $("#ceksyarat").removeAttr("disabled");
    //     }else{
    //         $('#ceksyarat').prop('disabled', true);

    //     }
    // });
        
</script>
@endsection