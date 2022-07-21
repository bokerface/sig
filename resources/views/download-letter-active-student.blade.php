<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        html {
            margin-left: 1.5cm;
            margin-top: 0.2cm;
            margin-right: 1.5cm;
            margin-bottom: 1cm
        }

        body {
            margin: 0;
            box-shadow: 0;
            padding: 0;
        }

        p.justify {
            text-align: justify;
        }

        td {
            vertical-align: top;
        }

        .text-center {
            text-align: center;
        }

    </style>
</head>

<body>

    <img style="width:100%;margin-bottom:0.7cm;"
        src="{{ public_path('images/asset/kop-surat-igov.jpg') }}" alt="">
    <br />
    {{-- <table style="width:100%">
      <tr>
        <td style="width:20pt">No</td>
        <td> : 169/IGOV/XI/2022</td>
        <td style="text-align:right;"> 15 Juni 2022 </td>
      </tr>
      <tr>
        <td>Hal</td>
        <td colspan="2"> : Keterangan Mahasiswa Aktif</td>
      </tr>
      <tr>
        <td>Lamp</td>
        <td colspan="2"> : -</td>
      </tr>
    </table> --}}

    <h4 class="text-center">Surat Keterangan Mahasiswa Aktif</h4>


    <p style="text-align:center"> <img style="width:70%"
            src="{{ public_path('images/asset/basmalah.jpg') }}" alt=""></p>

    <p style="font-style: :italic">Assalamu’alaikum Wr.Wb</p>

    <p>Dengan Hormat,</p>
    <p class="justify">Bersama surat ini kami sampaikan kepada Bapak/Ibu, bahwa yang bertanda tangan dibawah ini:</p>
    <table>
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
    <table>
        <tr>
            <td style="width:100px;">Nama</td>
            <td>: {{ $data_mhs['name'] }}</td>
        </tr>
        <tr>
            <td>No.Mahasiswa</td>
            <td>: {{ $data_mhs['student_id'] }}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: International Program of Government Affairs and Administration (IGOV)</td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td>: Ilmu Sosial dan Ilmu Politik UMY</td>
        </tr>
    </table>

    <p class="justify">Bahwa yang bersangkutan benar sebagai <strong>mahasiswa aktif</strong> International Program of
        Government Affairs and Administration (IGOV) Universitas Muhammadiyah Yogyakart.</p>

    <p class="justify">Demikian surat rekomendasi ini kami buat, atas perhatian dan kerjasama Bapak/Ibu kami ucapkan
        terima kasih.</p>

    <p style="font-style: :italic">Wassalamu’alaikum Wr.Wb</p>


    <hr>
    <div class="p-5">This document generated automatically from sigov.umy.ac.id at {{ $submission->created_at }}</div>

</body>

</html>
