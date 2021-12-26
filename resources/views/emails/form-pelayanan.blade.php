@component('mail::message')
    <img src="https://drive.google.com/file/d/1pPhKMQT92XhHGPf9_fePcWi1FXctjiEj/view?usp=sharing" alt="" width="12%">
    <div style="width:100%;height:3px;background-color:#b31315;margin-top:15px;margin-bottom: 15px"></div>
<p style="font-size: 1.25em;font-weight:670;color:#000">
    Shalom <span style="text-transform:capitalize">{{ $dataEmail['fullname'] }}</span>,
</p>
<p style="font-size: 1em;font-weight:500;color:#000">
    Terima kasih untuk waktunya sudah mengisi Form Pelayanan di bulan Januari 2022.
</p>
<p style="font-size: 1em;font-weight:500;color:#000">
    Di bawah ini merupakan informasi yang sudah diinput oleh anda : 
</p>
<br>
<table border="0" align="left" style="width:100%;margin-bottom:45px">
    <tr style="font-size: 1em;font-weight:500;color:#6e040e;">
        <td style="width: 25%;padding-left:5px;">Nama</td>
        <td style="width: 2%">:</td>
        <td style="width: 73%;text-transform:capitalize" rowspan="2" valign="top">{{ $dataEmail['fullname'] }}</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr style="font-size: 1em;font-weight:500;color:#6e040e;">
        <td style="width: 25%;padding-left:5px;">Tanggal</td>
        <td style="width: 2%">:</td>
        <td style="width: 73%;text-transform:capitalize" rowspan="2" valign="top">
            @foreach ($dataEmail['tanggal'] as $item)
                | {{ str_replace(array("Minggu, ", "Sabtu, "), array('', ''), $item) }} | 
            @endforeach
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    {{-- @if (!empty($dataEmail['notes']))
        <tr style="font-size: 1em;font-weight:500;color:rgb(10, 65, 105);">
            <td style="width: 25%;padding-left:5px;">Notes</td>
            <td style="width: 2%">:</td>
            <td style="width: 73%;text-transform:capitalize">{{ $dataEmail['notes'] }}</td>
        </tr>
    @endif --}}
</table>
{{-- @component('mail::button', ['url' => ''])
Button Call
@endcomponent --}}
<br>
<p style="font-size: 1em;font-weight:500;color:#000;margin-top:30px">
    Best Regards,
</p>
<br>
<br>
<p style="font-size: 1em;font-weight:670;color:#000">
    Nuel
</p>
<span style="font-size: 1em;font-weight:570;color:#000;font-style:oblique;margin-top:-20px">
    (Wakil Kepala Bidang Multimedia Rayon 18)
</span>
<div style="width:100%;height:3px;background-color:#b31315;margin-top: 15px;"></div>

@endcomponent
