<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" --}}
    {{-- integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}

</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="p-5">IGOV UMY</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
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
                        <td> : {{ $data_mhs['name'] }}</td>
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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No <br> <i>Number</i></th>
                            <th>Nama Mata Kuliah</th>
                            <th><i>Subjects</i></th>
                            <th>SKS <br> <i>Credit</i></th>
                            <th>Nilai <br> <i>Grades</i></th>
                            {{-- <th>Score</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transcript->Data as $data)
                            <tr>
                                <td>{{ $data->Urut }}</td>
                                <td>{{ $data->NamaMK }}</td>
                                <td>{{ $data->NamaMKEng }}</td>
                                <td>{{ $data->SKS }}</td>
                                <td>{{ $data->NilaiHuruf }}</td>
                                {{-- <td>{{ $data->BobotNilai }}</td> --}}
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">Total</td>
                            <td colspan="2">Total Credit</td>
                            <td>Total Score</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="p-5">This document generated automatically from sigov.umy.ac.id at
                    {{ $submission->created_at }}</div>
            </div>
        </div>
    </div>
</body>

</html>
