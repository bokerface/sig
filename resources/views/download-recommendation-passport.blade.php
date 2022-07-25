@extends('layout-letter')
@section('content')
<table style="width:100%">
    <tr>
        <td style="width:20pt">No</td>
        <td> : {{ $meta[2]->value }}</td>
        <td style="text-align:right;">
            @php
                $date = \Carbon\Carbon::parse($meta[3]->value)->locale('id');
                $date->settings(['formatFunction' => 'translatedFormat']);
            @endphp
            {{ $date->format('j F Y') }}
        </td>
    </tr>
    <tr>
        <td>Hal</td>
        <td colspan="2"> : Rekomendasi Pembuatan Paspor</td>
    </tr>
    <tr>
        <td>Lamp</td>
        <td colspan="2"> : -</td>
    </tr>
</table>

<p>Kepada Yth. <br />
    <span style="font-weight:bold">{{ $meta[0]->value }}</span>
    <br />
    di tempat
</p>

<div style="text-align:center"> <img style="width:150px"
        src="{{ public_path('images/asset/basmalah.jpg') }}" alt=""></div>

<p style="font-style:italic">Assalamu’alaikum Wr.Wb</p>

<p>Dengan Hormat,</p>
<p class="justify">Bersama surat ini kami sampaikan kepada Bapak/Ibu, bahwa yang bertanda tangan dibawah ini:</p>
<table style="margin-left:30px;">
    <tr>
        <td style="width:100px;">Nama</td>
        <td>:</td>
        <td>Sakir Ridho Wijaya, S.IP., M.IP</td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td>Direktur Program Studi International Program of Government Affairs and Administration (IGOV) </td>
    </tr>
    <tr>
        <td>Instansi</td>
        <td>:</td>
        <td>Universitas Muhammadiyah Yogyakarta.</td>
    </tr>
</table>
<p class="justify">Dengan ini menerangkan bahwa:</p>
<table style="margin-left:30px;">
    <tr>
        <td style="width:100px;">Nama</td>
        <td>:</td>
        <td>{{ $data_mhs['name'] }}</td>
    </tr>
    <tr>
        <td>No. Mahasiswa</td>
        <td>:</td>
        <td>{{ $data_mhs['student_id'] }}</td>
    </tr>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td>International Program of Government Affairs and Administration (IGOV)</td>
    </tr>
    <tr>
        <td>Fakultas</td>
        <td>:</td>
        <td>Ilmu Sosial dan Ilmu Politik UMY</td>
    </tr>
</table>

<p class="justify">Bahwa yang bersangkutan benar sebagai mahasiswa International Program of Government Affairs and
    Administration (IGOV) Universitas Muhammadiyah Yogyakarta, yang akan melakukan Student Exchange Program dan
    memerlukan Paspor untuk kepentingan tersebut.</p>

<p class="justify">Demikian surat rekomendasi ini kami buat, atas perhatian dan kerjasama Bapak/Ibu kami ucapkan terima
    kasih.</p>

<p style="font-style:italic">Wassalamu’alaikum Wr.Wb</p>

<table style="width:100%">
    <tr>
        <td style="width:60%">
            &nbsp;
        </td>
        <td style="text-align:center;width:40%;">
            <p>Mengetahui, <br>Direktur IGOV</p>
            <div class="barcode">{!! DNS2D::getBarcodeHTML(url('check-submission/' . $submission->id), 'QRCODE', 2.5,
                2.5) !!}
            </div>
            <p><u
                    style="font-weight:bold">{{ setting('director_name')->setting ?? '' }}</u><br>
                NIK. {{ setting('director_nik')->setting ?? '' }}
            </p>
        </td>
    </tr>
</table>
@stop
