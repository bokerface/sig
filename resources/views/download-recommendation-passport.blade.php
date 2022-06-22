<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" --}}
    {{-- integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

    <style>
    html { margin-left: 1.5cm;
          margin-top: 0.2cm;
          margin-right: 1.5cm;
          margin-bottom: 1cm
      }   
      body {
        margin: 0;
        box-shadow: 0;
        padding:0;
        }
    </style>
</head>

<body>
   
    <img style="width:100%;margin-bottom:0.7cm;" src="{{ public_path('images/asset/kop-surat-igov.jpg') }}" alt="">
    <br />
    <table style="width:100%">
      <tr>
        <td style="width:20pt">No</td>
        <td> : 169/IGOV/XI/2022</td>
        <td style="text-align:right;"> 15 Juni 2022 </td>
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
    <span style="font-weight:bold">Kepada Yth</span><br />
    di tempat</p>

    <p style="text-align:center"> <img style="width:70%" src="{{ public_path('images/asset/basmalah.jpg') }}" alt=""></p>

    <p style="font-style: :italic">Assalamu’alaikum Wr.Wb</p>

    <p>Dengan Hormat,</p>
    <p>Bersama surat ini kami sampaikan kepada Bapak/Ibu, bahwa yang bertanda tangan dibawah ini:</p>
    <table>
      <tr>
        <td>Nama</td>
        <td>: Sakir Ridho Wijaya, S.IP., M.IP</td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>: Direktur Program Studi International Program of Government Affairs and Administration (IGOV)  </td>
      </tr>
      <tr>
        <td>Instansi</td>
        <td>: Universitas Muhammadiyah Yogyakarta.</td>
      </tr>
    </table>
    <p>Dengan ini menerangkan bahwa:</p>
    <table>
      <tr>
        <td>Nama</td>
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
    
      <p>Bahwa yang bersangkutan benar sebagai mahasiswa International Program of Government Affairs and Administration (IGOV) Universitas Muhammadiyah Yogyakarta, yang akan melakukan Student Exchange Program dan memerlukan Paspor untuk kepentingan tersebut.</p>

       <p>Demikian surat rekomendasi ini kami buat, atas kerjasama Bapak/Ibu kami ucapkan terima kasih.</p>

        <p style="font-style: :italic">Wassalamu’alaikum Wr.Wb</p>


    <hr>     
    <div class="p-5">This document generated automatically from sigov.umy.ac.id at {{ $submission->created_at }}</div>
           
</body>

</html>
