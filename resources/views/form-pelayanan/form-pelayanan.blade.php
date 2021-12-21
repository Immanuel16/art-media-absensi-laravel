@extends('layout.form')

@section('title', 'Form Pelayanan')

@section('content')
    <div class="row" style="margin-top: 50px;margin-bottom:50px;">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card card-register" id="thumbnail-register">
                <div class="card-body">
                    {{-- <div class="card-header-register" id="thumbnail-header-register">
                        <div class="card-body">
                            <p class="mt-4 mb-4"></p>
                        </div>
                    </div> --}}
                    
                    <div class="row" id="notification-closed">
                        <div class="col-md-12">
                            <div class="alert alert-danger text-center">
                                Maaf... Form pelayanan sudah ditutup
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" id="notification-opened">
                        <div class="col-md-12">
                            <!-- <img src="../img/crew.jpeg" width="100%" alt="" class="card-img-top img-atas"> -->

                            <div class="alert alert-success text-center alert-opened">
                                Form pelayanan akan dibuka Sabtu, 22 Mei pukul 14.00
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3" align="center">
                            <p class="title-countdown-opened mt-4">Times left :</p>
                            <p class="countdown-opened mb-4" style="color:#000;font-weight: 700">
                                <span id="daysOpened" class="mr-2"></span> <span id="hoursOpened" class="mr-2"></span> <span id="minutesOpened" class="mr-2"></span> <span id="secondsOpened" class="mr-2"></span>
                            </p>
                        </div>
                    </div>
                    
                    <form action="/form-pelayanan/add" enctype="multipart/form-data" method="post" id="form-pelayanan">
                        @csrf
                        
                        <div class="row timer-responsive-1 ">
                            <div class="col-md-12 col-lg-12 col-sm-12" style="">
                                <p class="alert-notif" style="text-align: center;">Batas Waktu Pengisian Form</p>
                                <div class="alert alert-info text-center text-danger countdown font-weight-bold">
                                    <span id="days" class="mr-2"></span> <span id="hours" class="mr-2"></span> <span id="minutes" class="mr-2"></span> <span id="seconds" class="mr-2"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('img/crew.jpeg')}}" class="img-crew">
                            </div>
                            
                            <div class="col-md-6 ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title-form" align="center">
                                            form pelayanan juni 2021
                                        </h2>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <div class="divider"></div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form__group timer-responsive-2" style="margin-top: 20px;" >
                                            <p class="alert-notif" style="text-align: center;color:darkorchid">Batas Waktu Pengisian Form</p>

                                            <div class="alert alert-info text-center text-danger font-weight-bold">
                                                <span id="daysOne" class="mr-2"></span> <span id="hoursOne" class="mr-2"></span> <span id="minutesOne" class="mr-2"></span> <span id="secondsOne" class="mr-2"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                {{-- Batas waktu pengiriman --}}
                                {{-- <div class="row">
                                    <div class="col-md-12 timer-responsive-2">
                                    
                                        <p class="alert-notif" style="text-align: center;color:darkorchid">Batas Waktu Pengisian Form</p>
        
                                        <div class="alert alert-info text-center text-danger font-weight-bold">
                                            <span id="daysOne" class="mr-2"></span> <span id="hoursOne" class="mr-2"></span> <span id="minutesOne" class="mr-2"></span> <span id="secondsOne" class="mr-2"></span>
                                        </div>
                                        
                                    </div>
                                </div> --}}
                                
                                
                                {{-- Nama Lengkap --}}
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <input required type='text' name="fullname" value="{{old('fullname')}}" class="@error('fullname') invalid-input @enderror"/>
                                        <label alt='Full Name' placeholder='Input your name'></label>
                                        <div class="message-error">
                                            @error('fullname')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>

                                
                                
                                {{-- Email --}}
                                <div class="row">
                                    <div class="col-md-12 mt-3">
                                        <input required type='text' name="email" value="{{old('email')}}" class="@error('email') invalid-input @enderror"/>
                                        <label alt='Email' placeholder='Input your email' ></label>
                                        <div class="message-error">
                                            @error('email')
                                                {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12 mt-3 mb-5">
                                        <label for="" class="">Dapat melayani pada:</label>
                                    </div>
                                </div>
                                
                                {{-- Tanggal Pelayanan --}}
                                <div class="row" style="margin-top: -25px;">
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-1" name="tanggal[]" value="Minggu, 06 Juni 2021">
                                        <label for="box-1">Minggu, 06 Juni 2021</label>
                                    </div>
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-2" name="tanggal[]" value="Minggu, 13 Juni 2021">
                                        <label for="box-2">Minggu, 13 Juni 2021</label>
                                    </div>
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-3" name="tanggal[]" value="Minggu, 20 Juni 2021">
                                        <label for="box-3">Minggu, 20 Juni 2021 </label>
                                    </div>
                                    <div class="col-md-12 mt-custom">
                                        <input type="checkbox" id="box-4" name="tanggal[]" value="Minggu, 27 Juni 2021">
                                        <label for="box-4">Minggu, 27 Juni 2021 </label>
                                    </div>
                                </div>
                                
                                {{-- alasan tidak dapat melayani --}}
                                <div class="row mt-3">
                                    <div class="col-md-12 mt-3">
                                        <input type='text' name="notes" />
                                        <label alt='Alasan' placeholder='Alasan tidak dapat melayani'></label>
                                        <span style="color:red;font-size:0.7em" class="birthdateErr">Hanya diisi apabila tidak bisa pelayanan pada bulan Juni</span>
                                    </div>
                                </div>
                                
                                
                                {{-- Tombol submit --}}
                                <div class="row mt-4" style="display:flex; justify-content: center;">
                                    <!-- <div class="col-md-6"></div> -->
                                    <div class="col-md-6" align="center">
                                        <button class="btn btn-custom-sendiri" id="btn-custom" type="submit">Submit</button>
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