@extends('layout-letter')
@section('content')
    <table style="width:100%">
        <tr>
            <td style="width:20pt">No</td>
            <td> : {{ $meta[3]->value }}</td>
            <td style="text-align:right;">
                @php
                $date = \Carbon\Carbon::parse($meta[5]->value)->locale('id');
                $date->settings(['formatFunction' => 'translatedFormat']);
                @endphp
                {{ $date->format('j F Y') }}
            </td>
        </tr>
        <tr>
            <td>Hal</td>
            <td colspan="2"> : Rekomendasi Exchange</td>
        </tr>
        <tr>
            <td>Lamp</td>
            <td colspan="2"> : -</td>
        </tr>
    </table>

    <p>Kepada Yth. <br />
        <span style="font-weight:bold">Kepala Lembaga Kerjasama dan Urusan Internasional UMY</span>
        <br />
        di tempat
    </p>

    <div style="text-align:center"> <img style="width:150px" src="{{ public_path('images/asset/basmalah.jpg') }}" alt=""></div>

    <p style="font-style:italic">Assalamu’alaikum Wr.Wb</p>

    <p>Dengan Hormat,</p>
    <p class="justify">Menindaklanjuti arahan dari Lembaga Kerjasama dan Urusan Internasional UMY, terlampir disampaikan
        nama mahasiswa International Program of Government Affairs and Administration (IGOV) Universitas Muhammadiyah
        Yogyakarta yang akan mengikuti program Student Exchange di semester genap tahun akademik
        {{ $meta[4]->value }}.
    </p>

    <p class="justify">Maka untuk itu, kami menyampaikan permohonan Surat Keputusan (SK) program Student Exchange untuk mahasiswa dibawah ini: </p>

    <table class="table table-bordered" style="width:16cm; margin-left:30px;">
        <tr>
            <th style="width:2%;">No.</th>
            <th style="width:20%;">Nama</th>
            <th style="width:10%;">NIM</th>
            <th style="width:30%;">Universitas Tujuan</th>
        </tr>
        <tr>
            <td style="text-align: center">1</td>
            <td style="text-align: center">{{ $data_mhs['name'] }}</td>
            <td style="text-align: center">{{ $data_mhs['student_id'] }}</td>
            <td>
               {{ institution_name($meta[1]->value)  }}
               {{ destination_name($meta[0]->value) }}
            </td>
            {{-- <td style="text-align: center">{{ institution_name($meta[0]->value) }} {{ destination_name($meta[1]->value) }} \\ </td> --}}
        </tr>
    </table>

   

    

    <p class="justify">Demikian surat pemberitahuan ini kami buat. Atas perhatian dan kerjasama Bapak/Ibu kami ucapkan terima
        kasih.</p>

    <p style="font-style:italic">Wassalamu’alaikum Wr.Wb</p>


    <table style="width:100%">
        <tr>
            <td style="width:60%">
                &nbsp;
            </td>
            <td style="text-align:center;width:40%;">
                <p>Mengetahui, <br>Direktur IGOV</p>
                <div class="barcode">{!! DNS2D::getBarcodeHTML(url('check-submission/' . $submission->id), 'QRCODE', 2.5, 2.5) !!}
                </div>
                <p><u style="font-weight:bold">Sakir Ridho Wijaya, S.IP., M.IP</u><br>
                    NIK. 19891106201604 163 156
                </p>
            </td>
        </tr>
    </table>
@stop