

$(document).ready(function () {
    
    function getById(elements) {
        return document.getElementById(elements);
    }
    getById('eventOnline').style.display = "none";
    getById('eventOnsite').style.display = "none";
    getById('eventZoom').style.display = "none";
    getById('eventYt').style.display = "none";
    getById('eventZoomYes').style.display = "none";
    getById('listDesign').style.display = "none";
    getById('listVideo').style.display = "none";
    getById('bentukFlyer').style.display = "none";
    getById('bentukThumb').style.display = "none";
    getById('bentukCover').style.display = "none";
    getById('bentukVideoOthers').style.display = "none";
    
    $('input[name="event"]').on('click', function() {
        if(getById('event1').checked){
            getById('eventOnsite').style.display = "none";
            getById('eventOnline').style.display = "block";
        } else if(getById('event2').checked){
            getById('eventOnsite').style.display = "block";
            getById('eventOnline').style.display = "none";
            getById('eventZoom').checked = false;
            getById('eventZoom').style.display = "none";
            getById('eventZoomYes').style.display = "none";
            getById('eventYt').style.display = "none";
            getById('eventType1').checked = false;
            getById('eventType2').checked = false;
            getById('eventType3').checked = false;
            getById('eventType4').checked = false;
            getById('eventType5').checked = false;
            getById('eventZoom1').checked = false;
            getById('eventZoom2').checked = false;
        } else{
            getById('eventOnsite').style.display = "none";
            getById('eventOnline').style.display = "none";
        }
    });
    
    $('input[name="eventZoom"]').on('click', function() {
        if(getById('eventZoom1').checked){
            getById('eventZoomYes').style.display = "block";
            // getById('eventYt').style.display = "none";
        } else {
            getById('eventZoomYes').style.display = "none";
        } 
    });
    
    $('input[name="eventPlatform"]').on('click', function() {
        if(getById('eventType1').checked){
            getById('eventZoom').style.display = "block";
            getById('eventYt').style.display = "none";
            
        } else if(getById('eventType2').checked){
            getById('eventYt').style.display = "block";
            getById('eventZoom').style.display = "none";
            getById('eventZoom1').checked = false;
            getById('eventZoom2').checked = false;
            getById('eventZoomYes').style.display = "none";
            // $('#eventZoom').prop('checked', false);
        } else{
            getById('eventYt').style.display = "none";
            getById('eventZoom').style.display = "none";
        }
    });
    
    
    
    $('input[name="necessary[]"]').on('change', function() {
        if(getById('box-5').checked){
            getById('listDesign').style.display = "block";
            // getById('eventYt').style.display = "none";
        } else{
            getById('listDesign').style.display = "none";
            getById('box-7').checked = false;
            getById('box-10').checked = false;
            getById('box-11').checked = false;
            getById('box-8').checked = false;
            getById('box-12').checked = false;
            getById('box-13').checked = false;
            getById('box-9').checked = false;
            getById('box-14').checked = false;
            getById('box-15').checked = false;
            getById('bentukFlyer').style.display = "none";
            getById('bentukThumb').style.display = "none";
            getById('bentukCover').style.display = "none";
        }
        
        if(getById('box-1').checked){
            getById('listVideo').style.display = "block";
            
        } 
        
        if(!getById('box-1').checked){
            getById('listVideo').style.display = "none";
            getById('box-3').checked = false;
            getById('box-4').checked = false;
            getById('box-6').checked = false;
            getById('box-16').checked = false;
            getById('box-17').checked = false;
            getById('box-18').checked = false;
            getById('bentukVideoOthers').style.display = "none";
            // getById('box-9').checked = false;
            // getById('box-14').checked = false;
            // getById('box-15').checked = false;
        }
    });
    
    $('input[name="necessaryDesign[]"]').on('change', function() {
        if(getById('box-7').checked){
            getById('bentukFlyer').style.display = "block";
            // getById('eventYt').style.display = "none";
        } else{
            getById('bentukFlyer').style.display = "none";
        }
        
        if(getById('box-8').checked){
            getById('bentukThumb').style.display = "block";
        } else{
            getById('bentukThumb').style.display = "none";
        }
        
        if(getById('box-9').checked){
            getById('bentukCover').style.display = "block";
        } else{
            getById('bentukCover').style.display = "none";
        }
    });
    
    
    $('input[name="necessaryVideo[]"]').on('change', function() {
        if(getById('box-6').checked){
            getById('bentukVideoOthers').style.display = "block";
            // getById('eventYt').style.display = "none";
        } else{
            getById('bentukVideoOthers').style.display = "none";
        }
        
    });

    var dataBidang = [
        'BP2N',
        'COOL',
        'Dewasa Muda',
        'DP3',
        'IR 1',
        'IR 2',
        'IR 3',
        'IR 4',
        'IR 5',
        'IR 6',
        'Junior Church',
        'KOM',
        'Light Church',
        'PBI',
        'Pendoa',
        'Sekolah Minggu',
        'STT',
        'TK',
        'UMAS',
        'WBI',
        'Youth',
    ];



    $("#division").autocomplete({
        source: dataBidang
    });

    $.datepicker.setDefaults(
        $.extend({
            'dateFormat': 'DD, dd MM yy'
        },
            $.datepicker.regional['id']
        )
    );
    $("#exeTime").datepicker({
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'dd MM yy',
        changeMonth: true,
        changeYear: true,
        minDate: "y",
        // maxDate: "-15y",
        // yearRange: "-50:-15y",
        locale: 'id',
        // endDate: "+0d"
    });

    $("#castTime").datepicker({
        autoclose: true,
        todayHighlight: true,
        dateFormat: 'dd MM yy',
        changeMonth: true,
        changeYear: true,
        minDate: "y",
        // maxDate: "-15y",
        // yearRange: "-50:-15y",
        locale: 'id',
        // endDate: "+0d"
    });

})