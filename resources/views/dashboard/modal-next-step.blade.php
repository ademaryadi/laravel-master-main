<div class="modal fade" id="kt_modal_next_step" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content">
        
            <!--begin::Modal header-->
            <div class="modal-header" style="background-color: #600A88;">
                <!--begin::Modal title-->
                <h3 class="card-title text-center text-white ls-2">PEMENUHAN PERSYARATAN</h3>
                <!--end::Modal title-->						
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <div class="d-flex flex-column">
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Row-->
                        <form>
                        <div class="row">
                            <input hidden id="perizinan-id" type="text" value=""></input>	
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="next_form" value="penomoran" 
                                    id="next_form_penomoran" />
                                <label id="penomoran-label" class="btn btn-icon-white btn-info h-100px
                                        p-7 d-flex align-items-center mb-10" 
                                    for="next_form_penomoran">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen055.svg-->
                                        <span class="svg-icon svg-icon-3x me-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black"/>
                                        <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black"/>
                                        <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black"/>
                                        </svg></span>							
                                    <!--end::Svg Icon-->
                                    <!--begin::Info-->
                                    <span class="d-block fw-bold text-start">
                                        <span id="penomoran-text" class="text-white fw-bolder d-block fs-4 mb-2">Penomoran</span>								
                                    </span>
                                    <!--end::Info-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="next_form" value="persyaratan" checked="checked" 
                                    id="next_form_persyaratan" disabled="disabled"/>
                                <label id="persyaratan-label" class="btn btn-circle btn-icon-white btn-info h-100px 
                                         p-7 d-flex align-items-center mb-10" 
                                    for="next_form_persyaratan">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen005.svg-->
                                        <span class="svg-icon svg-icon svg-icon-3x me=5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black"/>
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                                        </svg>
                                        </span>								
                                        <!--end::Svg Icon-->
                                    <!--begin::Info-->
                                    <span class="d-block fw-bold text-start">
                                        <span id="persyaratan-text" class="text-white fw-bolder d-block fs-4 mb-2">Pemenuhan Persyaratan</span>
                                    </span>
                                    <!--end::Info-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->	
                            <!--begin::Col-->
                            <div class="col-lg-4">
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="next_form" value="ulo" 
                                    id="next_form_ulo" disabled="disabled"/>
                                <label id="ulo-label" class="btn btn-circle btn-icon-white btn-info h-100px
                                        p-7 d-flex align-items-center mb-10" 
                                    for="next_form_ulo">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/electronics/elc007.svg-->
                                        <span class="svg-icon svg-icon-3x me-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.4409 22C13.5455 22 14.4409 21.1046 14.4409 20C14.4409 18.8954 13.5455 18 12.4409 18C11.3364 18 10.4409 18.8954 10.4409 20C10.4409 21.1046 11.3364 22 12.4409 22Z" fill="black"/>
                                        <path opacity="0.3" d="M9.04095 14.8L9.94095 16.1C10.6409 15.6 11.5409 15.3 12.4409 15.3C13.3409 15.3 14.2409 15.6 14.9409 16.1L15.8409 14.8C16.1409 14.3 16.0409 13.6 15.4409 13.4C14.5409 13 13.5409 12.7 12.4409 12.7C11.3409 12.7 10.3409 12.9 9.44095 13.4C8.84095 13.6 8.74095 14.3 9.04095 14.8Z" fill="black"/>
                                        <path opacity="0.3" d="M3.14096 5.80005L4.04095 7.19995C6.44095 5.59995 9.34094 4.69995 12.4409 4.69995C15.5409 4.69995 18.4409 5.59995 20.8409 7.19995L21.7409 5.80005C22.0409 5.30005 21.8409 4.70002 21.3409 4.40002C18.7409 2.90002 15.6409 2 12.4409 2C9.24094 2 6.14095 2.90002 3.54095 4.40002C3.04095 4.70002 2.84096 5.30005 3.14096 5.80005Z" fill="black"/>
                                        <path opacity="0.3" d="M6.14097 10.3L7.04096 11.7C8.64096 10.7 10.441 10.1 12.541 10.1C14.641 10.1 16.441 10.7 18.041 11.7L18.941 10.3C19.241 9.80005 19.141 9.10002 18.541 8.90002C16.741 7.90002 14.741 7.40002 12.541 7.40002C10.341 7.40002 8.34096 7.90002 6.54096 8.90002C5.94096 9.10002 5.74097 9.80005 6.14097 10.3Z" fill="black"/>
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Info-->
                                    <span class="d-block fw-bold text-start">
                                        <span id="ulo-text" class="text-white fw-bolder d-block fs-4 mb-2">Uji Laik Operasi</span>								
                                    </span>
                                    <!--end::Info-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                        </div>								
                        <!--end::Row-->
                        </form>
                    </div>
                    <!--end::Input group-->			
                </div>
                
                <!--begin::Actions-->					        							        
                <div class="d-flex flex-stack pt-10">
                    <!--begin::Wrapper-->
                    <div class="me-2">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light btn-secondary">
                            KEMBALI
                        </button>
                    </div>
                    <!--end::Wrapper-->							
                    <!--begin::Wrapper-->
                    <div>
                        <a id="submit-next-step" type="button" class="btn btn-purple">
                            <span class="indicator-label">SUBMIT</span>																                
                        </a>											        
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
                
            </div>
            <!--end::Modal Body-->
        </div>
        <!--end::Modal Content-->
    </div>
<!--end::Modal Dialog-->
</div>

<div class="modal fade" id="kt_modal_next_step2" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content">
        
            <!--begin::Modal header-->
            <div class="modal-header" style="background-color: #600A88;">
                <!--begin::Modal title-->
                <h3 class="card-title text-center text-white ls-2">PEMENUHAN PERSYARATAN</h3>
                <!--end::Modal title-->						
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <div class="d-flex flex-column">
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Row-->
                        <form>
                        <div class="row">
                            <input hidden id="perizinan-id" type="text" value=""></input>
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="next_form" value="persyaratan" checked="checked" 
                                    id="next_form_persyaratan" />
                                <label id="persyaratan-label" class="btn btn-circle btn-icon-white btn-info h-100px 
                                         p-7 d-flex align-items-center mb-10" 
                                    for="next_form_persyaratan">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen005.svg-->
                                        <span class="svg-icon svg-icon svg-icon-3x me=5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black"/>
                                        <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                                        </svg>
                                        </span>								
                                        <!--end::Svg Icon-->
                                    <!--begin::Info-->
                                    <span class="d-block fw-bold text-start">
                                        <span id="persyaratan-text" class="text-white fw-bolder d-block fs-4 mb-2">Pemenuhan Persyaratan</span>
                                    </span>
                                    <!--end::Info-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->	
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Option-->
                                <input type="radio" class="btn-check" name="next_form" value="ulo" 
                                    id="next_form_ulo" disabled="disabled"/>
                                <label id="ulo-label" class="btn btn-circle btn-icon-white btn-info h-100px
                                        p-7 d-flex align-items-center mb-10" 
                                    for="next_form_ulo">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/electronics/elc007.svg-->
                                        <span class="svg-icon svg-icon-3x me-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.4409 22C13.5455 22 14.4409 21.1046 14.4409 20C14.4409 18.8954 13.5455 18 12.4409 18C11.3364 18 10.4409 18.8954 10.4409 20C10.4409 21.1046 11.3364 22 12.4409 22Z" fill="black"/>
                                        <path opacity="0.3" d="M9.04095 14.8L9.94095 16.1C10.6409 15.6 11.5409 15.3 12.4409 15.3C13.3409 15.3 14.2409 15.6 14.9409 16.1L15.8409 14.8C16.1409 14.3 16.0409 13.6 15.4409 13.4C14.5409 13 13.5409 12.7 12.4409 12.7C11.3409 12.7 10.3409 12.9 9.44095 13.4C8.84095 13.6 8.74095 14.3 9.04095 14.8Z" fill="black"/>
                                        <path opacity="0.3" d="M3.14096 5.80005L4.04095 7.19995C6.44095 5.59995 9.34094 4.69995 12.4409 4.69995C15.5409 4.69995 18.4409 5.59995 20.8409 7.19995L21.7409 5.80005C22.0409 5.30005 21.8409 4.70002 21.3409 4.40002C18.7409 2.90002 15.6409 2 12.4409 2C9.24094 2 6.14095 2.90002 3.54095 4.40002C3.04095 4.70002 2.84096 5.30005 3.14096 5.80005Z" fill="black"/>
                                        <path opacity="0.3" d="M6.14097 10.3L7.04096 11.7C8.64096 10.7 10.441 10.1 12.541 10.1C14.641 10.1 16.441 10.7 18.041 11.7L18.941 10.3C19.241 9.80005 19.141 9.10002 18.541 8.90002C16.741 7.90002 14.741 7.40002 12.541 7.40002C10.341 7.40002 8.34096 7.90002 6.54096 8.90002C5.94096 9.10002 5.74097 9.80005 6.14097 10.3Z" fill="black"/>
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Info-->
                                    <span class="d-block fw-bold text-start">
                                        <span id="ulo-text" class="text-white fw-bolder d-block fs-4 mb-2">Uji Laik Operasi</span>								
                                    </span>
                                    <!--end::Info-->
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Col-->
                        </div>								
                        <!--end::Row-->
                        </form>
                    </div>
                    <!--end::Input group-->			
                </div>
                
                <!--begin::Actions-->					        							        
                <div class="d-flex flex-stack pt-10">
                    <!--begin::Wrapper-->
                    <div class="me-2">
                        <button type="reset" data-bs-dismiss="modal" class="btn btn-light btn-secondary">
                            KEMBALI
                        </button>
                    </div>
                    <!--end::Wrapper-->							
                    <!--begin::Wrapper-->
                    <div>
                        <a id="submit-next-step" type="button" class="btn btn-purple">
                            <span class="indicator-label">SUBMIT</span>																                
                        </a>											        
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Actions-->
                
            </div>
            <!--end::Modal Body-->
        </div>
        <!--end::Modal Content-->
    </div>
<!--end::Modal Dialog-->
</div>