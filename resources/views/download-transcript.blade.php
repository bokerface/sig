<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    html { margin-left: 1.5cm;
          margin-top: 1cm;
          margin-right: 1.5cm;
          margin-bottom: 1cm
      }   
      body {
        margin: 0;
        box-shadow: 0;
        padding:0;        
        }
        p.justify {
          text-align: justify;
        }

        table.table {
            border:1px solid rgb(168, 158, 158);
            padding:0;
            border-spacing: 0px;
            border-collapse: separate;
        }

        .table th {
          vertical-align: top;
          border-top:1px solid rgb(136, 132, 132);
          padding:5px;
          margin:0;
          background:rgb(91, 89, 89);
          color:#fff;
          vertical-align: middle;
          font-size:11pt;
        }
        .table td {
          vertical-align: top;
          border-top:1px solid rgb(174, 168, 168);
          padding:1px;
          margin:0;
          font-size:11pt;
        }
        .table tr:nth-child(odd) td {
            background:rgb(235, 241, 239);
        }
        .text-center {
          text-align:center;
        }

    </style>
</head>

<body>
   
    <img style="width:100%;margin-bottom:0.7cm;" src="{{ public_path('images/asset/kop-surat-igov.jpg') }}" alt="">
    <br />
                <h3 class="text-center"><u>TRANSKRIP AKADEMIK <i>(ACADEMIC TRANSCRIPT)</i></u></h3>
                <table>
                    <tr>
                        <td><u>Nama</u></td>
                        <td> : {{ $data_mhs['name'] }}</td>
                    </tr>
                    <tr>
                        <td><i>Name</i></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><u>Tempat dan Tanggal Lahir</u></td>
                        <td> : {{ $data_mhs['dateofbirth'] }}</td>
                    </tr>
                    <tr>
                        <td><i>Place and Date of Birth</i></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><u>Nomor Mahasiswa</u></td>
                        <td> : {{ $data_mhs['student_id'] }}</td>
                    </tr>
                    <tr>
                        <td><i>Student Number</i></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><u>Program Studi</u></td>
                        <td> : Ilmu Pemerintahan (Kelas Internasional)</td>
                    </tr>
                    <tr>
                        <td><i>Department</i></td>
                        <td><i>Governmental Science (International Class/ IGOV)</i></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><u>Universitas</u></td>
                        <td> : Universitas Muhammadiyah Yogyakarta</td>
                    </tr>
                    <tr>
                        <td><i>University</i></td>
                    </tr>
                    <tr>
                        <td><br></td>
                    </tr>
                </table>
                <h3>DAFTAR NILAI <i>(LIST OF GRADES)</i></h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: center;">No <br> <i>Number</i></th>
                            <th style="text-align: left;">Nama Mata Kuliah</th>
                            <th style="text-align: right;"><i>Subjects</i></th>
                            <th style="text-align: center;">SKS <br> <i>Credit</i></th>
                            <th style="text-align: center;">Nilai <br> <i>Grades</i></th>
                            {{-- <th>Score</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transcript->Data as $data)
                            <tr>
                                <td style="text-align: center;">{{ $data->Urut }}</td>
                                <td style="text-align: left;">{{ $data->NamaMK }}</td>
                                <td style="text-align: right;">{{ $data->NamaMKEng }}</td>
                                <td style="text-align: center;">{{ $data->SKS }}</td>
                                <td style="text-align: center;">{{ $data->NilaiHuruf }}</td>
                                {{-- <td>{{ $data->BobotNilai }}</td> --}}
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Total</td>
                            <td>Total Credit</td>
                            <td>Total Score</td>
                        </tr>
                    </tbody>
                </table>
   
        <hr>
  
                <div class="p-5">This document generated automatically from sigov.umy.ac.id at
                    {{ $submission->created_at }}</div>
        
        
</body>

</html>
