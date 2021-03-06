<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Check Submission</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin/css/sb-admin-2.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-gradient-purple">

    <div class="container">

        <div class="col-md-8 offset-md-2">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="{{ asset('images/logo.png') }}" width="200"
                                        class="pt-5 pb-5 mb-5" />
                                </div>

                                @if($submission)

                                    <h1 class="text-center my-4 h2" style="color:green;">Valid!</h1>

                                    <table class="table table-bordered table-striped">

                                        <tr>
                                            <td>Publish Date</td>
                                            <td>
                                                @php
                                                    $date =\Carbon\Carbon::parse($submission->created_at)->locale('en');
                                                    $date->settings(['formatFunction' => 'translatedFormat']);
                                                @endphp
                                                {{ $date->format('j F Y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Topics</td>
                                            <td>{{ $submission->letter_type }}</td>
                                        </tr>
                                        <tr>
                                            <td>Student Name</td>
                                            <td>{{ $submission->fullname }}</td>
                                        </tr>
                                        <tr>
                                            <td>Student Id</td>
                                            <td>{{ $submission->studentid }}</td>
                                        </tr>

                                    </table>


                                @else

                                    <h1 class="text-center my-4 h2" style="color:red;">Not Valid!</h1>

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>




    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

    @livewireScripts
</body>

</html>
