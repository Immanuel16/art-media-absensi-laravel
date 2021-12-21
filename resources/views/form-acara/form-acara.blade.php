@extends('layout.form')

@section('title', 'Form Acara')

@section('content')
<div class="row" style="margin-top:50px;margin-bottom:50px;">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="card card-register" id="thumbnail-register">
            <div class="card-body">
                <div class="card-header-register" id="thumbnail-header-register">
                    <div class="card-body">
                        <p class="mt-4 mb-4"> Form Request Acara </p>
                    </div>
                </div>

                <form action="/form-acara/test" enctype="multipart/form-data" method="POST" autocomplete="off">
                    <div class="row mb-3 mt-3">
                        <div class="col-md-12" align="center">
                            <img src="{{asset('img/logo-media.png')}}" alt="" style="border-radius: 30%; width:100px;height:100px">
                        </div>
                    </div>
                    <!-- Input Nama -->
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='text' name="fullname" />
                            <label alt='' placeholder='Nama Lengkap'></label>
                        </div>
                    </div>

                    <!-- Input Nama PIC -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='text' name="picName" />
                            <label alt='' placeholder='Nama PIC'></label>
                        </div>
                    </div>

                    <!-- Input No. HP PIC -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='number' name="picPhone" />
                            <label alt='' placeholder='Nomor HP / WA PIC'></label>
                        </div>
                    </div>

                    <!-- Input Bidang -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='text' name="division" id="division" />
                            <label alt='' placeholder='Bidang'></label>
                        </div>
                    </div>

                    <!-- Input Nama Acara -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='text' name="eventName" />
                            <label alt='' placeholder='Nama Acara'></label>
                        </div>
                    </div>

                    <!-- Input Waktu Pelaksanaan -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='text' name="exeTime" id="exeTime" />
                            <label alt='' placeholder='Waktu Pelaksanaan'></label>
                        </div>
                    </div>

                    <!-- Input Waktu Tayang -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input required type='text' name="castTime" id="castTime" />
                            <label alt='' placeholder='Waktu Tayang'></label>
                        </div>
                    </div>

                    <!-- Input Acara -->
                    <div class="row mt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <label class="lable-custom" for="" style="display: block;">Jenis Acara</label>
                            <div class="form-check form-check-inline mr-5">
                                <input class="form-check-input" type="radio" name="event" id="event1" value="Online">
                                <label class="form-check-label" for="event1" style="padding-left: 8px;">Online</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="event" id="event2" value="Onsite">
                                <label class="form-check-label" for="event2" style="padding-left: 8px;">Onsite</label>
                            </div>
                        </div>
                    </div>

                    <!-- Platform Acara -->
                    <div class="row mt-3" id="eventOnline">
                        <div class="col-md-12">
                            <label class="lable-custom" for="" style="display: block;">Platform Acara</label>
                            <div class="form-check form-check mr-4">
                                <input class="form-check-input" type="radio" name="eventPlatform" id="eventType1" value="Zoom">
                                <label class="form-check-label" for="eventType1" style="padding-left: 8px;">Zoom</label>
                            </div>

                            <div id="eventZoom" class="ml-3 mt-3">
                                <label class="lable-custom" for="" style="display: block;">Perlu ID & Password</label>
                                <div class="form-check form-check-inline mr-5">
                                    <input class="form-check-input" type="radio" name="eventZoom" id="eventZoom1" value="yes">
                                    <label class="form-check-label" for="eventZoom1" style="padding-left: 8px;">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="eventZoom" id="eventZoom2" value="no">
                                    <label class="form-check-label" for="eventZoom2" style="padding-left: 8px;">Tidak</label>
                                </div>
                            </div>

                            <div id="eventZoomYes" class="ml-3 mt-3">
                                <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                                    <input type='text' name="zoomId" id="zoomId" />
                                    <label alt='' placeholder='ID Zoom'></label>
                                </div>

                                <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                                    <input type='text' name="zoomPass" id="zoomPass" />
                                    <label alt='' placeholder='Password'></label>
                                </div>
                            </div>

                            <div class="form-check form-check mr-4 mt-3">
                                <input class="form-check-input" type="radio" name="eventPlatform" id="eventType2" value="Youtube">
                                <label class="form-check-label" for="eventType2" style="padding-left: 8px;">Youtube</label>
                            </div>
                            <div class="ml-3 mt-3" id="eventYt">
                                <input type='text' name="ytChannel" id="ytChannel" />
                                <label alt='' placeholder='Nama Channel'></label>
                            </div>
                            <div class="form-check form-check mr-2 mt-3">
                                <input class="form-check-input" type="radio" name="eventPlatform" id="eventType3" value="Live Zoom">
                                <label class="form-check-label" for="eventType3" style="padding-left: 8px;">Live Zoom</label>
                            </div>
                            <div class="form-check form-check mr-3 mt-3">
                                <input class="form-check-input" type="radio" name="eventPlatform" id="eventType4" value="Live Youtube">
                                <label class="form-check-label" for="eventType4" style="padding-left: 8px;">Live Youtube</label>
                            </div>
                            <div class="form-check form-check mt-3">
                                <input class="form-check-input" type="radio" name="eventPlatform" id="eventType5" value="Live Instagram">
                                <label class="form-check-label" for="eventType5" style="padding-left: 8px;">Live Instagram</label>
                            </div>

                        </div>
                    </div>

                    <div class="row mt-3" id="eventOnsite">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <input type='text' name="onsiteLocation" id="onsiteLocation" />
                            <label alt='' placeholder='Tempat'></label>
                        </div>
                    </div>

                    <!-- <div class="row mt-3" id="eventZoom">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3">
                            <label class="lable-custom" for="" style="display: block;">Perlu ID & Password</label>
                            <div class="form-check form-check-inline mr-5">
                                <input class="form-check-input" type="radio" name="eventZoom" id="eventZoom1" value="yes">
                                <label class="form-check-label" for="eventZoom1" style="padding-left: 8px;">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="eventZoom" id="eventZoom2" value="no">
                                <label class="form-check-label" for="eventZoom2" style="padding-left: 8px;">Tidak</label>
                            </div>
                        </div>
                    </div> -->



                    <!-- <div class="row mt-3" id="eventZoomYes">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                            <input type='text' name="idZoom" id="idZoom" />
                            <label alt='' placeholder='ID Zoom'></label>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12 mt-4">
                            <input type='text' name="passZoom" id="passZoom" />
                            <label alt='' placeholder='Password'></label>
                        </div>
                    </div> -->


                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="lable-custom mt-3 mb-3" for="" style="display: block;">Yang Diperlukan</label>
                            <div class="form__group-checkbox right atas">
                                <input type="checkbox" id="box-5" name="necessary[]" value="Design Grafis">
                                <label for="box-5">Design Grafis</label>
                            </div>

                            <div class="ml-3 mt-2" id="listDesign">
                                <div class="form__group-checkbox right">
                                    <input type="checkbox" id="box-7" name="necessaryDesign[]" value="Flyer">
                                    <label for="box-7">Flyer</label>
                                </div>
                                <div class="ml-4" id="bentukFlyer">
                                    <div class="form__group-checkbox right">
                                        <input type="checkbox" id="box-10" name="necessaryDesignFlyer[]" value="Cetak">
                                        <label for="box-10" class="mr-3">Cetak</label>
                                        <input type="checkbox" id="box-11" name="necessaryDesignFlyer[]" value="Softcopy">
                                        <label for="box-11">Softcopy</label>
                                    </div>
                                </div>

                                <div class="form__group-checkbox left atas" style="margin-top: -10px;">
                                    <input type="checkbox" id="box-8" name="necessaryDesign[]" value="Thumbnail">
                                    <label for="box-8">Thumbnail</label>
                                </div>
                                <div class="ml-4" id="bentukThumb">
                                    <div class="form__group-checkbox right">
                                        <input type="checkbox" id="box-12" name="necessaryDesignThumb[]" value="Cetak">
                                        <label for="box-12" class="mr-3">Cetak</label>
                                        <input type="checkbox" id="box-13" name="necessaryDesignThumb[]" value="Softcopy">
                                        <label for="box-13">Softcopy</label>
                                    </div>
                                </div>

                                <div class="form__group-checkbox right" style="margin-top: -10px;">
                                    <input type="checkbox" id="box-9" name="necessaryDesign[]" value="Cover">
                                    <label for="box-9">Cover </label>
                                </div>
                                <div class="ml-4" id="bentukCover">
                                    <div class="form__group-checkbox right">
                                        <input type="checkbox" id="box-14" name="necessaryDesignCover[]" value="Cetak">
                                        <label for="box-14" class="mr-3">Cetak</label>
                                        <input type="checkbox" id="box-15" name="necessaryDesignCover[]" value="Softcopy">
                                        <label for="box-15">Softcopy</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form__group-checkbox left atas" style="margin-top: -10px;">
                                <input type="checkbox" id="box-1" name="necessary[]" value="Editing Video">
                                <label for="box-1">Editing Video</label>
                            </div>
                            <div class="ml-3" id="listVideo">
                                <div class="form__group-checkbox right">
                                    <input type="checkbox" id="box-3" name="necessaryVideo[]" value="Youtube">
                                    <label for="box-3">Youtube</label>
                                </div>
                                <div class="form__group-checkbox left atas" style="margin-top: -10px;">
                                    <input type="checkbox" id="box-4" name="necessaryVideo[]" value="Zoom">
                                    <label for="box-4">Zoom</label>
                                </div>
                                <div class="form__group-checkbox right" style="margin-top: -10px;">
                                    <input type="checkbox" id="box-6" name="necessaryVideo[]" value="Medsos">
                                    <label for="box-6">Medsos </label>
                                </div>
                                <div class="ml-3" id="bentukVideoOthers">
                                    <div class="form__group-checkbox right">
                                        <input type="checkbox" id="box-16" name="necessaryVideoOthers[]" value="Whatsapp">
                                        <label for="box-16" class="mr-3">WA</label>
                                        <input type="checkbox" id="box-17" name="necessaryVideoOthers[]" value="Facebook">
                                        <label for="box-17" class="mr-3">FB</label>
                                        <input type="checkbox" id="box-18" name="necessaryVideoOthers[]" value="Instagram">
                                        <label for="box-18">IG</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form__group-checkbox right" style="margin-top: -10px;">
                                <input type="checkbox" id="box-2" name="necessary[]" value="Operator Zoom">
                                <label for="box-2">Operator Zoom </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 col-lg-12" align="center">
                            <button type="submit" class="btn-custom" name="register">
                                Submit
                            </button>
                        </div>
                    </div>




                </form>

            </div>
        </div>
    </div>
</div>
@endsection