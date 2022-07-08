<html>

  <head>
    <style>
      /** 
                  Set the margins of the page to 0, so the footer and the header
                  can be of the full height and width !
               **/
      @page {
        margin: 0cm 0cm;
      }
  
      /** Define now the real margins of every page in the PDF **/
      body {
        margin-top: 3cm;
        margin-left: 2cm;
        margin-right: 2cm;
        margin-bottom: 2cm;
      }
  
      /** Define the header rules **/
      header {
        position: fixed;
        top: 0.5cm;
        left: 0cm;
        right: 0cm;
        height: 3cm;
      }
  
      /** Define the footer rules **/
      footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2.6cm;
      }
  
      /* Global */
  
      p {
        margin-top: 3px;
        margin-bottom: 8px;
      }
  
      p.justify {
        text-align: justify;
      }
  
      td {
        vertical-align: top;
      }
  
      div.barcode>div {
        margin: 0 auto;
      }
  
      table {
        margin-bottom: 8px;
      }
  
      table.table {
        border: 1px solid #333;
        border-right: none;
        border-spacing: 0px;
        border-collapse: separate;
      }
  
      table.table-bordered tr td,
      table.table-bordered tr th {
        border-top: 1px solid #333;
        border-right: 1px solid #333;
        padding: 5px;
      }
  
      table.table-bordered tr th {
        font-weight: bold;
        border-top: none;
      }
    </style>
  </head>
  
  <body>
    <!-- Define header and footer blocks before your content -->
    <header>
      <img style="width:100%;margin-bottom:0.7cm;" src="{{ public_path('images/asset/header-surat.png') }}" alt="">
    </header>
  
    <footer>
      <img style="width:100%;margin-bottom:0.7cm;" src="{{ public_path('images/asset/footer-surat.jpg') }}" alt="">
    </footer>
    
    <main>
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

    <div style="text-align:center"> <img style="width:150px" src="{{ public_path('images/asset/basmalah.jpg') }}" alt=""></div>

    <p style="font-style:italic">Assalamu’alaikum Wr.Wb</p>

    <p>Dengan Hormat,</p>
    <p class="justify">Bersama surat ini kami sampaikan kepada Bapak/Ibu, bahwa yang bertanda tangan dibawah ini:</p>
    <table style="margin-left:30px;">
      <tr>
        <td style="width:100px;">Nama</td>
        <td>: Sakir Ridho Wijaya, S.IP., M.IP</td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>: Direktur Program Studi International Program of Government Affairs and Administration (IGOV) </td>
      </tr>
      <tr>
        <td>Instansi</td>
        <td>: Universitas Muhammadiyah Yogyakarta.</td>
      </tr>
    </table>
    <p class="justify">Dengan ini menerangkan bahwa:</p>
    <table style="margin-left:30px;">
      <tr>
        <td style="width:100px;">Nama</td>
        <td>: {{ $data_mhs['name'] }}</td>
      </tr>
      <tr>
        <td>No. Mahasiswa</td>
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

    <p class="justify">Bahwa yang bersangkutan benar sebagai mahasiswa International Program of Government Affairs and Administration (IGOV) Universitas Muhammadiyah Yogyakarta, yang akan melakukan Student Exchange Program dan memerlukan Paspor untuk kepentingan tersebut.</p>

    <p class="justify">Demikian surat rekomendasi ini kami buat, atas kerjasama Bapak/Ibu kami ucapkan terima kasih.</p>

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
  </main>
    
  </body>

</html>
