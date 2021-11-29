@extends('layout.template')

@section('container')
<div class="card">
    <div class="card-header" style="background-color: #600A88 !important;">
        <div class="card-title fs-3 fw-bolder text-light">PENDAFTARAN - DATA PEMOHON</div>
    </div>
    <form id="kt_project_settings_form" class="form" action="{{ url('proses-pemohon') }}" method="post" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="card-body p-9">
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nama Pemohon*</label>
                <input class="form-control form-control-lg form-control @error('name') is-invalid @enderror" type="text" placeholder="Masukan Nama Lengkap" id="name" name="name" value="{{ old('name') }}" required autocomplete="off" />
                <div class="text-muted">Nama Pemohon adalah nama penerima kuasa untuk mengurus izin. Jika pemohon adalah Direktur Perusahaan, maka nama pemohon adalah nama Direktur.</div>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Email Pemohon*</label>
                <input class="form-control form-control-lg form-control @error('email') is-invalid @enderror" type="email" placeholder="Masukan Alamat Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="off" />
                <div class="text-muted">Pastikan alamat email yang Anda masukkan sudah benar. SK izin yang telah diterbitkan akan dikirimkan melalui alamat email diatas. Email permohon adalah email yang diberikan kuasa, dan jika pemohon adalah seorang direktur, maka email pemohon adalah email direktur. Email juga digunakan untuk login ke dalam sistem</div>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nomor Telepon/Handphone Pemohon*</label>
                <input class="form-control form-control-lg form-control @error('phone') is-invalid @enderror" type="text" placeholder="" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="off" re/>
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nomor KTP Pemohon*</label>
                        <input class="form-control form-control-lg form-control @error('nik') is-invalid @enderror" type="text" placeholder="" id="nik" name="nik" value="{{ old('nik') }}" maxlength="16" minlength="16" autocomplete="off" />
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Upload KTP Pemohon*</label>
                        <input class="form-control form-control-lg form-control" type="file" placeholder="" id="nik_file" name="nik_file" autocomplete="off" accept="application/pdf"/>
                        @error('nik_file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                
                <div class="text-muted">KTP Pemohon adalah KTP penerima kuasa untuk mengurus izin. Jika pemohon adalah Direktur Perusahaan, maka KTP pemohon adalah KTP Direktur.</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Jabatan*</label>
                <input class="form-control form-control-lg form-control @error('jabatan') is-invalid @enderror" type="text" placeholder="" id="=jabatan" name="jabatan" value="{{ old('jabatan') }}" autocomplete="off" />
                @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Kartu Pegawai/Surat Keterangan Bekerja*</label>
                <input class="form-control form-control-lg form-control" type="file" placeholder="" id="kartu" name="kartu" autocomplete="off" accept="application/pdf"/>
                @error('kartu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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
            <button type="submit" class="btn btn-primary" id="kt_registrasi_submit">Submit</button>
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

    $("#kt_registrasi_submit").click(function(){
        var nik_file = document.getElementById("nik_file").files.length;
        var kartu = document.getElementById("kartu").files.length;
        if($('#ceksyarat').is(':checked')==false || $("#name").val()=="" || $("#email").val()=="" || $("#phone").val()=="" || $("#nik").val()=="" || $("#nik_file").val()==0 || $("#jabatan").val()=="" || $("#kartu").val()==0){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi semua data!", "warning");
        }else if(grecaptcha.getResponse()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Captcha!", "warning");
        }else{
            swal({
                title: "KONFIRMASI PENGAJUAN PEMENUHAN PERSYARATAN",
                text: "Dengan ini saya menyatakan bahwa seluruh data yang disampaikan adalah BENAR. Jika dikemudian hari data yang disampaikan terbukti tidak benar, maka kami siap menerima akibat hukum sesuai dengan ketentuan perundang-undangan",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $('form#kt_project_settings_form').submit()
                } else {
                    swal("Dibatalkan");
                    event.preventDefault();
                }
            });
            // Swal.fire({
            //     title: 'Dengan ini saya menyatakan bahwa seluruh data yang disampaikan adalah BENAR. Jika dikemudian hari data yang disampaikan terbukti tidak benar, maka kami siap menerima akibat hukum sesuai dengan ketentuan perundang-undangan',
            //     showDenyButton: true,
            //     confirmButtonText: 'Save',
            //     denyButtonText: `Don't save`,
            //     }).then((result) => {
            //     /* Read more about isConfirmed, isDenied below */
            //     if (result.isConfirmed) {
            //         // Swal.fire('Saved!', '', 'success')
            //         $('form#kt_project_settings_form').submit()
            //     } else if (result.isDenied) {
            //         Swal.fire('Batal Disimpan', '', 'info')
            //         event.preventDefault();
            //     }
            // })
        }
    });
        
</script>
@endsection