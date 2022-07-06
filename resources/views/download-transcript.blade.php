@extends('layout-letter')
@section('content')

<style>
    body {
        font-size: 11pt;
        margin-top: 2.4cm;
        margin-left: 1.2cm;
        margin-right: 1.2cm;
        margin-bottom: 2.4cm;
      }
    .table-transcript {
        border-spacing: 0px;
        border-collapse: separate;
        border-bottom :1px solid #b9b9b9;
    }
    .table-transcript th {        
       background:#b9b9b9;
    }
    .table-transcript th, .table-transcript td {        
        padding:2px;
        font-size:10pt;
    }
    .table-transcript tr:nth-child(even) td {        
        background:#e9e9e9
    }
    .table-transcript th.no-border, .table-transcript td.no-border {        
        border-right:none;
    }

    .judul-transkrip tr:nth-child(even) td {
        padding-bottom:4px;
    }
</style> 
<h3 class="text-center"><u>TRANSKRIP AKADEMIK <i>(ACADEMIC TRANSCRIPT)</i></u></h3>
<table class="judul-transkrip">
    <tr>
        <td><u>Nama</u></td>
        <td> : {{ $data_mhs['name'] }}</td>
    </tr>
    <tr>
        <td><i>Name</i></td>
    </tr>

    @php
    $date = \Carbon\Carbon::parse($data_mhs['dateofbirth'])->locale('id');
    $date->settings(['formatFunction' => 'translatedFormat']);
    @endphp
  


    <tr>
        <td><u>Tempat dan Tanggal Lahir</u></td>
        <td> : {{ $data_mhs['placeofbirth'] }}, {{ $date->format('j F Y') }}</td>
    </tr>
    <tr>
        <td><i>Place and Date of Birth</i></td>
    </tr>
   
    <tr>
        <td><u>Nomor Mahasiswa</u></td>
        <td> : {{ $data_mhs['student_id'] }}</td>
    </tr>
    <tr>
        <td><i>Student Number</i></td>
    </tr>
  
    <tr>
        <td><u>Program Studi</u></td>
        <td> : Ilmu Pemerintahan (Kelas Internasional)</td>
    </tr>
    <tr>
        <td><i>Department</i></td>
        <td><i>&nbsp;&nbsp;Governmental Science (International Class/ IGOV)</i></td>
    </tr>

    <tr>
        <td><u>Universitas</u></td>
        <td> : Universitas Muhammadiyah Yogyakarta</td>
    </tr>
    <tr>
        <td><i>University</i></td>
    </tr>

</table>
<h4 class="text-center" style="line-height:1em; margin:0; margin-bottom:4px;">DAFTAR NILAI <i>(LIST OF GRADES)</i></h4>

<table class="table-transcript">
    <thead>
        <tr>
            <th style="text-align: center;">No</th>
            <th class="no-border" style="text-align: left;">Nama Mata Kuliah</th>
            <th style="text-align: right;"><i>Subjects</i></th>
            <th style="text-align: center;">SKS <br> <i>Credit</i></th>
            <th class="no-border" style="text-align: center;">Nilai <br> <i>Grades</i></th>
            {{-- <th>Score</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach($transcript->Data as $data)
        <tr>
            <td style="text-align: center;">{{ $data->Urut }}</td>
            <td class="no-border" style="text-align: left;">{{ $data->NamaMK }}</td>
            <td style="text-align: right; font-style:italic;">{{ $data->NamaMKEng }}</td>
            <td style="text-align: center;">{{ $data->SKS }}</td>
            <td class="no-border" style="text-align: center;">{{ $data->NilaiHuruf }}</td>
            {{-- <td>{{ $data->BobotNilai }}</td> --}}
        </tr>
        @endforeach
       
    </tbody>
</table>

@php
    
    $sum = array_sum(array_column($transcript->Data, 'SKS'));

@endphp
<table>
    <tr>
        <td style="width:200px;"><u>Jumlah SKS</u></td>
        <td> : {{ $sum }}</td>
    </tr>
    <tr>
        <td><i>Total of Credit</i></td>
    </tr>

    <tr>
        <td><u>IP Kumulatif</u></td>
        <td> : {!! round($transcript->Data[0]->IPK,2) !!} of 4.0</td>
    </tr>
    <tr>
        <td><i>Grade Point Average</i></td>
        {{-- <td>&nbsp;&nbsp;<i>{!! round($transcript->Data[0]->IPK,2) !!} of 4.0</i></td> --}}
    </tr>

</table>

<table style="width:100%">
    <tr>
        <td style="width:60%">
            &nbsp;
        </td>
        <td style="text-align:center;width:40%;">

            @php
            $date = \Carbon\Carbon::parse($meta[0]->value);
            @endphp           

            <p>Yogyakarta, {{ $date->format('j F Y') }} <br>Director of IGOV</p>
            <div class="barcode">{!! DNS2D::getBarcodeHTML(url('check-submission/' . $submission->id), 'QRCODE', 2.5, 2.5) !!}
            </div>
            <p><u style="font-weight:bold">Sakir Ridho Wijaya, S.IP., M.IP</u><br>
                NIK. 19891106201604 163 156
            </p>
        </td>
    </tr>
</table>

{{-- <hr>

<div class="p-5">This document generated automatically from sigov.umy.ac.id at
    {{ $submission->created_at }}
</div> --}}


@stop