@extends('layout.form')

@section('title', 'Form Pelayanan')

@section('content')
    <div class="row" style="margin-top: 50px;margin-bottom:50px; >
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card card-register" id="thumbnail-register">
                <div class="card-body">
                    <div class="row" id="notification-closed">
                        <div class="col-md-12">
                            <div class="alert alert-danger text-center">
                                Form pelayanan dibuka kembali 25 Desember pkl 12.00
                            </div>
                        </div>
                    </div>

                    <div class="row" id="notification-opened">
                        <div class="col-md-12" align="center">
                            <!-- <img src="../img/crew.jpeg" width="100%" alt="" class="card-img-top img-atas"> -->

                            <div class="alert alert-success text-center alert-opened" style="width: 85%;background:#75594e;border-color:#75594e">
                                Form pelayanan dibuka kembali pkl 12.00
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3" align="center">
                            <p class="title-countdown-opened alert-notif mt-4">Times left :</p>
                            <p class="countdown-opened mb-4" style="color:#75594e;font-weight: 800 !important;margin-top:-10px">
                                <span id="daysOpened" class="mr-2"></span> <span id="hoursOpened"
                                    class="mr-2"></span> <span id="minutesOpened" class="mr-2"></span>
                                <span id="secondsOpened" class="mr-2"></span>
                            </p>
                        </div>
                    </div>

                    <form action="/form-pelayanan/add" enctype="multipart/form-data" method="post" id="form-pelayanan">
                        @csrf

                        <div class="row timer-responsive-1 ">
                            <div class="col-md-12 col-lg-12 col-sm-12" style="" align="center">
                                <p class="alert-notif mt-3" style="text-align: center;">Batas Waktu Pengisian Form</p>
                                <div class="alert alert-info custom-bg-alert text-center text-danger countdown font-weight-bold">
                                    <p class="countdown-left" style="color: #f7e8e5">
                                        <span id="days" class="mr-2"></span> <span id="hours"
                                        class="mr-2"></span> <span id="minutes" class="mr-2"></span>
                                        <span id="seconds" class="mr-2"></span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('img/crew.jpeg') }}" class="img-crew">
                            </div>

                            <div class="col-md-6 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title-form" align="center">
                                            form pelayanan <span class="month"></span> 2022
                                        </h2>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-12" align="center">
                                        <div class="divider"></div>
                                    </div>
                                </div> --}}
                                <hr>

                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <div class="timer-responsive-2" style="margin-top: -10px;">
                                            <p class="alert-notif mt-3" style="text-align: center;">Batas
                                                Waktu Pengisian Form</p>

                                            <div class="alert alert-info custom-bg-alert text-center text-danger font-weight-bold">
                                                <p class="countdown-left">
                                                    <span id="daysOne" class="mr-2"></span> <span id="hoursOne"
                                                    class="mr-2"></span> <span id="minutesOne"
                                                    class="mr-2"></span> <span id="secondsOne"
                                                    class="mr-2"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Nama --}}
                                <div class="form__group field">
                                    <input type="input" class="form__field @error('fullname') invalid-input @enderror" placeholder="Input your name" name="fullname" id='name' required value="{{ old('fullname') }}" />
                                    <label for="name" class="form__label">Nama</label>
                                    <div class="message-error">
                                        @error('fullname')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                
                                {{-- Email --}}
                                
                                <div class="form__group field">
                                    <input type="input" class="form__field @error('email') invalid-input @enderror" placeholder="Input your email" name="email" id='email' value="{{ old('email') }}" required />
                                    <label for="name" class="form__label">Email</label>
                                    <div class="message-error">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 mt-3 mb-5">
                                        <label for="" class="___class_+?55___ label-custom">Dapat melayani pada:</label>
                                    </div>
                                </div>

                                {{-- Tanggal Pelayanan --}}
                                <div class="row" style="margin-top: -50px;">
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-1" name="tanggal[]"
                                            value="Minggu, 09 Januari 2022">
                                        <label for="box-1">Minggu, 09 Januari 2022</label>
                                    </div>
                                    {{-- <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-8" name="tanggal[]"
                                            value="Sabtu, 11 Desember 2021">
                                        <label for="box-8">Sabtu, 11 Desember 2021</label>
                                    </div> --}}
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-2" name="tanggal[]"
                                            value="Minggu, 16 Januari 2022">
                                        <label for="box-2">Minggu, 16 Januari 2022</label>
                                    </div>
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-3" name="tanggal[]"
                                            value="Minggu, 23 Januari 2022">
                                        <label for="box-3">Minggu, 23 Januari 2022 </label>
                                    </div>
                                    {{-- <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-4" name="tanggal[]" value="Sabtu, 25 Desember 2021">
                                        <label for="box-4">Sabtu, 25 Desember 2021 </label>
                                    </div> --}}
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-5" name="tanggal[]" value="Minggu, 30 Januari 2022">
                                        <label for="box-5">Minggu, 30 Januari 2022 </label>
                                    </div>
                                    {{-- <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-6" name="tanggal[]" value="Sabtu, 01 Januari 2022">
                                        <label for="box-6">Sabtu, 01 Januari 2022 </label>
                                    </div>
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-7" name="tanggal[]" value="Minggu, 02 Januari 2022">
                                        <label for="box-7">Minggu, 02 Januari 2022 </label>
                                    </div> --}}
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-12 hasVaccinated">
                                        <label for="" class="___class_+?55___ label-custom">Apakah Anda sudah vaksin?</label>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 5px;margin-left:-25px">
                                    <div class="col-md-12 mt-custom customRadio">
                                        <input type="radio" name="hasVaccinated" id="yes" value="yes" /> 
                                        <label for="yes" class="ml-3 radioYes">Ya</label>
                                        <span class="mr-3"></span>
                                        <input type="radio" name="hasVaccinated" id="no" value="no" class="custom-radio-btn radioNo"> <label for="no">Tidak</label>
                                    </div>
                                </div> --}}

                                {{-- alasan tidak dapat melayani --}}
                                {{-- <div class="row mt-1" style="margin-top: 0px">
                                    <div class="col-md-12">
                                        <div class="form__group field">
                                            <input type="input" class="form__field" placeholder="Alasan" name="notes" id='notes' />
                                            <label for="notes" class="form__label">Alasan</label>
                                        </div>
                                    </div>
                                    <span style="color:red;font-size:0.7em;display:inline-block;margin-top: 5px !important;padding-left:10px;padding-right:10px;margin-left:8px;font-weight:600;background:#fff;text-align:center;border-radius:7px;" class="birthdateErr">Hanya diisi apabila
                                    tidak bisa pelayanan pada bulan Oktober</span>
                                </div> --}}


                                {{-- Tombol submit --}}
                                <div class="row" style="display:flex; justify-content: ;">
                                    <!-- <div class="col-md-6"></div> -->
                                    <div class="col-md-12" align="center">
                                        <button class="btn btn-custom-sendiri" id="btn-custom" type="submit"><span style="display:inline-block;bottom:5px;position:relative">Submit</span></button>
                                    </div>
                                </div>



                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
