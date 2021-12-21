<!DOCTYPE html>

<html>

<head>
    <title>Media GBI Mega Bekasi/title>
    <link rel="stylesheet" href="{{asset('/css/custom/email/style.css')}}">
</head>

<body>
    <img src="{{asset('img')}}/logo-media.png" alt="" align="center">
    
    <hr>

    <h1>Shalom {{ $data['fullname'] }},</h1>
    
    <p>Terima kasih telah mengisi form request shooting ART Media, berikut ini informasi request yang sudah Anda lakukan:</p>

    <ul>
        <li>
            <tr>
                <td style="width: 30%">Nama PIC</td>
                <td style="width: 10%">:</td>
                <td style="color: blueviolet; font-weight:600;width:60%;">{{$data['fullname']}}</td>
            </tr>
        </li>
        <li>
            <tr>
                <td style="width: 30%">Nama Acara</td>
                <td style="width: 10%">:</td>
                <td style="color: blueviolet; font-weight:600;width:60%;">{{$data['tanggal']}}</td>
            </tr>
        </li>
        <li>
            <tr>
                <td style="width: 30%">Waktu Pelaksanaan</td>
                <td style="width: 10%">:</td>
                <td style="color: blueviolet; font-weight:600;width:60%;">{{$data['email']}}</td>
            </tr>
        </li>
        
    </ul>


    <p>Regards</p>
    <p style="font-weight: 600">ART Media GBI Mega Bekasi</p>
    
    <hr>

</body>

</html>