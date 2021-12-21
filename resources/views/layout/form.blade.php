
<!DOCTYPE html>
<html lang="en" style="height: 100% !important">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>ART MEDIA - @yield('title')</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="{{secure_asset('img/logo-media.png')}}" type="image/x-icon">
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{secure_asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{secure_asset('template')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{secure_asset('css')}}/custom/form/style.css">
  <link rel="stylesheet" href="{{secure_asset('css')}}/animation/loading/style.css">
  <!-- JQUERY UI -->
  <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
  
  <style>
    .clsDatePicker {
        z-index: 100000;
    }

    .ui-autocomplete {
        position: absolute;
        z-index: 99999 !important;
        cursor: default;
        padding: 0;
        margin-top: 2px;
        list-style: none;
        background-color: #ffffff;
        border: 1px solid #ccc;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .ui-autocomplete>li {
        padding: 3px 20px;
    }

    .ui-autocomplete>li.ui-state-focus {
        background-color: #DDD;
    }

    .ui-helper-hidden-accessible {
        display: none;
    }

    .datepicker {
        z-index: 999999 !important;
    }
</style>
</head>
<body>
    <div class="bg-loader">
        <img src="{{secure_asset('img/logo-media.png')}}" alt="" class="loader">
    </div>
    <div class="wrapper">
        @yield('content')
    </div>


<!-- jQuery -->
<script src="{{secure_asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{secure_asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{secure_asset('template')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{secure_asset('template')}}/dist/js/demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="{{secure_asset('js')}}/custom/form/config.js"></script>
<script src="{{secure_asset('js')}}/custom/form/timer.js"></script>
<script src="{{secure_asset('js')}}/custom/form/id-datepicker.js"></script>
{{-- <script src="{{ secure_asset('js/animation/snow/index.js') }}"></script> --}}
<script>
    $(document).ready(function() {
        $.datepicker.setDefaults(
            $.extend({
                    'dateFormat': 'DD, dd MM yy'
                },
                $.datepicker.regional['id']
            )
        );
        $("#birthdate").datepicker({
            autoclose: true,
            todayHighlight: true,
            dateFormat: 'dd MM yy',
            changeMonth: true,
            changeYear: true,
            minDate: "-100y",
            maxDate: "-15y",
            yearRange: "-50:-15y",
            locale: 'id',
            endDate: "+0d"
        });

    })
</script>
<script src="{{ secure_asset('js/animation/loading/index.js') }}"></script>

@include('sweetalert::alert')

</body>
</html>
