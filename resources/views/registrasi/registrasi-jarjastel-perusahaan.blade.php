@extends('layout.template')

@section('container')
<div class="card">
    <div class="card-header" style="background-color: #600A88 !important;">
        <div class="card-title fs-3 fw-bolder text-light">PENDAFTARAN - DATA INSTANSI</div>
    </div>
    <form id="kt_project_settings_form" class="form" action="{{ url('proses-perusahaan') }}" method="post" enctype="multipart/form-data">
        @csrf <!-- {{ csrf_field() }} -->
        <div class="card-body p-9">
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">NIB<em style="color: red">*</em></label>
                        <input class="form-control form-control-lg form-control-solid @error('nib') is-invalid @enderror" value="{{ auth()->user()->nib }}" readonly type="text" placeholder="" id="nib" name="nib" autocomplete="off" required/>
                        @error('nib')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="text-muted">NIB adalah Nomor Izin berusaha yang diperolah dari oss.go.id</div>
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Dokumen NIB<em style="color: red">*</em></label>
                        <input class="form-control form-control-lg form-control @error('nib_file') is-invalid @enderror" type="file" placeholder="" id="nib_file" name="nib_file" autocomplete="off" accept="application/pdf" required/>
                        @error('nib_file')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="text-muted">format dokumen PDF dan maksimal 5Mb</div>
                </div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Nama Perusahaan/Instansi Pemerintah<em style="color: red">*</em></label>
                <input class="form-control form-control-lg form-control @error('nama_perusahaan') is-invalid @enderror" type="text" placeholder="" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}"  autocomplete="off" />
                @error('nama_perusahaan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-4">
                <div class="col-xl-12 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Jenis Instansi</label>
                        <select name="jenis_perusahaan" id="jenis_perusahaan" class="form-control form-control-lg form-control @error('jenis_perusahaan') is-invalid @enderror">
                            @foreach ($jenis_perusahaan as $data_jenis_perusahaan)
                            <option value="{{ $data_jenis_perusahaan->id }}">{{ $data_jenis_perusahaan->jenis_perusahaan }}</option>
                             @endforeach
                        </select>
                        @error('jenis_perusahaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                {{-- <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Jenis Penanaman Modal</label>
                        <select name="penanaman_modal" id="penanaman_modal" class="form-control form-control-lg form-control @error('penanaman_modal') is-invalid @enderror">
                            @foreach ($jenis_penanaman_modal as $data_jenis_penanaman_modal)
                            <option value="{{ $data_jenis_penanaman_modal->id }}">{{ $data_jenis_penanaman_modal->jenis_penanaman_modal }}</option>
                             @endforeach
                        </select>
                        @error('penanaman_modal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div> --}}
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Nama Jalan<em style="color: red">*</em></label>
                        <input class="form-control form-control-lg form-control @error('street') is-invalid @enderror" type="text" placeholder="" id="street" name="street" value="{{ old('street') }}"  autocomplete="off" required/>
                        @error('street')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Provinsi<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="provinsi" name="provinsi" data-placeholder="Pilih Provinsi" required>
                            <option></option>
                            @foreach ($provinsi as $data)
                                <option value="{{ $data->prov_id }}">{{ $data->prov_name }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kota/Kabupaten<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="kota" name="kota" data-placeholder="Pilih Kota" required>
                            <option></option>
                        </select>
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kecamatan<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="kecamatan" name="kecamatan" data-placeholder="Pilih Kecamatan" required>
                            <option></option>
                        </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kelurahan/Desa<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="desa" name="desa" data-placeholder="Pilih Kelurahan/Desa" required>
                            <option></option>
                        </select>
                </div>
                <div class="col-xl-6 fv-row">
                        <label class="form-label fw-bolder text-dark fs-6">Kode Pos<em style="color: red">*</em></label>
                        <select class="form-select" data-control="select2" id="kodepos" name="kodepos" data-placeholder="Pilih Kode Pos" required>
                            <option></option>
                        </select>
                </div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">No Telepon Perusahaan/Instansi Pemerintah<em style="color: red">*</em></label>
                <input class="form-control form-control-lg form-control @error('phone') is-invalid @enderror" type="text" id="phone" name="phone" value="{{ old('phone') }}"  autocomplete="off" required/>
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-4">
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">NPWP Instansi<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('npwp') is-invalid @enderror" type="text" id="npwp" name="npwp" autocomplete="off" accept="application/pdf"/>
                    @error('npwp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">Dokumen NPWP Instansi<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('npwp_file') is-invalid @enderror" type="file" id="npwp_file" name="npwp_file" autocomplete="off" accept="application/pdf"/>
                    @error('npwp_file')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="text-muted">Pastikan Anda telah memasukkan NPWP dengan benar. NPWP instansi akan dicek validitasnya dengan database Ditjen Pajak. Apabila NPWP perusahaan Anda tidak valid, maka Anda tidak dapat mengajukan permohonan</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Surat Keterangan Domisili Instansi <em style="color: red">*</em></label>
                <input class="form-control form-control-lg form-control @error('domisili') is-invalid @enderror" type="file" id="domisili" name="domisili"autocomplete="off" accept="application/pdf"/>
                @error('domisili')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="fv-row mb-7">
                <label class="form-label fw-bolder text-dark fs-6">Surat Kuasa Instansi<em style="color: red">*</em></label>
                <input class="form-control form-control-lg form-control @error('surat_kuasa') is-invalid @enderror" type="file" id="surat_kuasa" name="surat_kuasa" autocomplete="off" accept="application/pdf"/>
                @error('surat_kuasa')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-7">
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">Akta Terakhir Instansi<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('dasar_hukum') is-invalid @enderror" type="file" id="dasar_hukum" name="dasar_hukum" autocomplete="off" accept="application/pdf"/>
                    @error('dasar_hukum')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-xl-6 fv-row">
                    <label class="form-label fw-bolder text-dark fs-6">SK Kemenkumham<em style="color: red">*</em></label>
                    <input class="form-control form-control-lg form-control @error('sk_kemenkumham') is-invalid @enderror" type="file" id="sk_kemenkumham" name="sk_kemenkumham" autocomplete="off" accept="application/pdf"/>
                    @error('sk_kemenkumham')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                
            </div>
            <div class="fv-row mb-7">
                <div class="text-muted">Dengan ini saya menyatakan : Informasi dan dokumen yang dilampirkan adalah benar sesuai dengan dokumen asli. Apabila informasi dan dokumen yang dilampirkan tidak benar dan tidak sesuai dengan dokumen asli, maka saya bersedia dikenakan sanksi berupa masuk ke dalam daftar hitam (blacklist) hingga sanksi yang diatur dalam peraturan perundang-undangan.</div>
            </div>
            <div class="fv-row mb-7">
                <label class="form-check form-check-custom form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" disabled id="ceksyarat" name="toc" value="1" />
                    <span class="form-check-label fw-bold text-gray-700 fs-6">Dengan membubuhkan cek list, saya telah membaca dan menyetujui ketentuan di atas.</span>
                </label>
            </div>
            <div class="fv-row mb-4">
                <div class="g-recaptcha" data-sitekey="6LfFNQkdAAAAAFXLESoqX4MXCtrQiB23mIxGq9SJ"></div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-end py-6 px-9">
            <button type="reset" class="btn btn-light btn-active-light-primary me-2">Kembali</button>
            {{-- <button type="submit" class="btn btn-secondary" disabled id="kt_registrasi_perusahaan_submit">Submit</button> --}}
            {{-- <a href="registrasi-jarjastel-pemohon" class="btn btn-primary" id="kt_registrasi_perusahaan_submit">Submit</a> --}}
            <button type="submit" class="btn btn-primary" id="kt_registrasi_perusahaan_submit">Submit</button>
        </div>
    </form>
</div>
@push('scripts')
<script>
    $('#ceksyarat').change(function () {
        // alert('changed');
        if ($('#ceksyarat').is(':checked')) {
            $("#kt_registrasi_perusahaan_submit").removeAttr("disabled");
            $('#kt_registrasi_perusahaan_submit').removeClass('btn-secondary');
            $('#kt_registrasi_perusahaan_submit').addClass('btn-primary');
        }else{
            $('#kt_registrasi_perusahaan_submit').prop('disabled', true);
            $('#kt_registrasi_perusahaan_submit').removeClass('btn-primary');
            $('#kt_registrasi_perusahaan_submit').addClass('btn-secondary');

        }
    });

    function cek_mandatory(){
        var domisili = document.getElementById("domisili").files.length;
        var surat_kuasa = document.getElementById("surat_kuasa").files.length;
        var dasar_hukum = document.getElementById("dasar_hukum").files.length;
        // console.log(domisili);
        if (domisili==0 || surat_kuasa==0 || dasar_hukum==0) {
            $('#ceksyarat').prop('disabled', true);
        }else{
            $("#ceksyarat").removeAttr("disabled");
        }
    }

    $('#domisili').change(function () {
        cek_mandatory();
    });

    $('#surat_kuasa').change(function () {
        cek_mandatory();
    });

    $('#dasar_hukum').change(function () {
        cek_mandatory();
    });

    $("#kt_registrasi_perusahaan_submit").click(function(){
        if($("#nib").val()=="" || $("#nib_file").val()=="" || $("#nama_perusahaan").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi semua data!", "warning");
        }else if(grecaptcha.getResponse()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi Captcha!", "warning");
        }else{
            // event.preventDefault();
            // window.location.href = 'registrasi-jarjastel-person';
        }
    });

    $('#provinsi').on("change", function(){
        var id = $(this).val();
        // alert(id);
        $('#kota').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getKota/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].city_id;
                        var name = response['data'][i].city_name;

                        var option = "<option value='"+id+"'>"+name+"</option>"; 
                        $("#kota").select2("destroy");
                        $("#kota").append(option); 
                        $("#kota").select2();
                        
                        $("#kecamatan").select2("destroy");
                        $("#desa").select2("destroy");
                        $("#kodepos").select2("destroy");
                        $("#kecamatan").select2();
                        $("#desa").select2();
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });

    $('#kota').on("change", function(){
        var id = $(this).val();
        $('#kecamatan').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getKecamatan/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].dis_id;
                        var name = response['data'][i].dis_name;

                        var option = "<option value='"+id+"'>"+name+"</option>";                 
                        $("#kecamatan").select2("destroy");
                        $("#kecamatan").append(option); 
                        $("#kecamatan").select2();

                        $("#desa").select2("destroy");
                        $("#kodepos").select2("destroy");
                        $("#desa").select2();
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });

    $('#kecamatan').on("change", function(){
        var id = $(this).val();
        $('#desa').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getDesa/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].subdis_id;
                        var name = response['data'][i].subdis_name;

                        var option = "<option value='"+id+"'>"+name+"</option>";                 
                        $("#desa").select2("destroy");
                        $("#desa").append(option); 
                        $("#desa").select2();

                        $("#kodepos").select2("destroy");
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });

    $('#desa').on("change", function(){
        var id = $(this).val();
        $('#kodepos').find('option').not(':first').remove(); 
        $.ajax({
            url: 'getKodepos/'+id,
            type: 'get',
            dataType: 'json',
            success: function(response){
                var len = 0;
                if(response['data'] != null){
                    len = response['data'].length;
                }

                if(len > 0){
                    for(var i=0; i<len; i++){

                        var id = response['data'][i].postal_id;
                        var name = response['data'][i].postal_code;

                        var option = "<option value='"+id+"'>"+name+"</option>";                 
                        $("#kodepos").select2("destroy");
                        $("#kodepos").append(option); 
                        $("#kodepos").select2();
                    }
                }
            }
        });
    });
</script>
@endpush

@endsection