@extends('layout.template')

@section('container')
<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
    <div class="card w-lg-500px">
        <div class="card-header text-center" style="background-color: #600A88 !important;">
            <div class="card-title fs-3 fw-bolder text-light text-center">Reset Password</div>
        </div>
        <div class="card-body p-9">
                <form class="form w-100" id="kt_sign_in_form" action="{{ action('Sendemail@forget_password') }}" method="post">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="fv-row mb-5">
                        <label class="form-label fs-6 fw-bolder text-dark">Alamat Email</label>
                        <input class="form-control form-control-lg form-control" type="email" placeholder="Masukan Alamat Email" id="email" name="email" autocomplete="off" required/>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="kt_forget_password" class="btn btn-lg bg-purple w-100">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            {{-- </div> --}}
        </div>
    </div>
</div>
<script>
    $("#kt_forget_password").click(function(){
        if($("#email").val()==""){
            event.preventDefault();
            swal("Peringatan!", "Mohon isi alamat email anda", "warning");
        }else{
            swal("Berhasil!", "Tautan untuk mengganti password telah dikirim ke alamat email anda. Silahkan periksa Kotak Masuk atau Spam di Akun Email anda. ", "success");
        }
    });
        
</script>
@endsection