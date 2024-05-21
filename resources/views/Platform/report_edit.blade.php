<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Roi System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    {{--
    <link rel="shortcut icon" href="../assets/images/favicon.ico"> --}}

    <!-- App css -->
    <link href="{{asset('assets/css/config/purple/bootstrap.min.css')}}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{asset('assets/css/config/purple/app.min.css')}}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="{{asset('assets/css/config/purple/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" />
    <link href="{{asset('assets/css/config/purple/app-dark.min.css')}}" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600&family=Roboto:wght@100;300;400;500;900&display=swap"
        rel="stylesheet">
    <link href="{{asset('assets/css/report-style.css')}}" rel="stylesheet" type="text/css" />
</head>

<!-- body start -->

<body>


    <div class="container-fluid">


        <form method="post" action="{{route('report.update')}}">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="row bg-red div-header border-black">
                        <div class="col-lg-12 ">
                            <h1 class="header-title text-center">تعديل التقـرير الـيومي {{ \Carbon\Carbon::now()->format('d-m-Y H:i') }}
                            </h1>


                        </div>

                        <div class="col-lg-3 mt-2 mb-2">

                            <div class="input-group">
                                {{-- <input type="text" class="form-control" placeholder="Recipient's username"
                                    aria-label="Recipient's username"> --}}
                                <input type="date" id="day" name="day" class="form-control " value="{{ $data->day}}" max="{{date('Y-m-d', strtotime('-1 day'))}}">
                                <a href="{{route('report',['day'=>$data->day])}}"  class="btn input-group-text btn-success waves-effect waves-light"
                                    type="button">عـرض التقـريـر</a>
                            </div>
                        </div>

                    </div>




                    <div class="row">
                        <div class="col-lg-12 p-0">
                            @include('Platform.edit_another')
                        </div>

                    </div>





                </div>
            </div>
        </form>

    </div>















    <script src="{{asset('assets/js/vendor.min.js')}}"></script>


    <script src="{{asset('assets/js/app.min.js')}}"></script>


    <script>
        $(document).ready(function() {

            $('#day').change(function() {

                const selectedDate = $(this).val();

                window.location.href = '{{route('report.edit')}}'+'?day=' + selectedDate;
            });
        });
    </script>



</body>

</html>
