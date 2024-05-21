<!DOCTYPE html>
<html lang="en">

<head>
    <title>Roi System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->

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


    <style>
        button,a.back_link {
            font-family: 'Cairo', sans-serif !important;
            font-size: 16px !important;
        }
    </style>


</head>

<!-- body start -->

<body>


    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-6  text-center mt-2 mb-2 ">
                <a href="{{route('report.edit').'?day='.$data->day}}" class=" back_link pl-5 pr-5 btn btn-primary  waves-effect waves-light">
                    <span class="mr-1 ml-1"><i class="fa fa-solid fa-arrow-left"></i></span>
                    تعديل التقرير
                </a>
            </div>
            <div class="col-lg-6  text-center mt-2 mb-2 ">
                <button id="btn-download" class="  pl-5 pr-5 btn btn-success  waves-effect waves-light">
                    <span class="mr-1 ml-1"><i class="fa fa-solid fa-download"></i></span>
                    تنزيل
                    التقرير
                </button>
            </div>
        </div>

        <div class="card" id="htmlContent">
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-12 bg-red div-header border-black">
                        <h1 class="header-title text-center"> التقـرير الـيومي  </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 bg-misty  border-black ">
                        @include('Platform.sms')
                    </div>
                    <div class="col-lg-8  ">
                        <div class="row">


                            <div class="col-lg-6 p-0">
                                @include('Platform.insatgram')
                            </div>
                            <div class="col-lg-6 p-0">
                                @include('Platform.twitter')
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 p-0">
                                @include('Platform.another')
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-2 div-date bg-red  border-black">
                        <p>{{ dayFormatSocailReport($data->day)}}</p>

                    </div>
                </div>

            </div>
        </div>


    </div>















    <script src="{{asset('assets/js/vendor.min.js')}}"></script>


    <script src="{{asset('assets/js/app.min.js')}}"></script>
    <script src="{{asset('assets/js/html2canvas.min.js')}}"
        integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        document.getElementById('btn-download').addEventListener('click', function() {
                // Get the element with id "htmlContent"
                var element = document.getElementById('htmlContent');

                // Use html2canvas to capture the content of the element
                html2canvas(element).then(function(canvas) {
                    // Convert canvas to data URL
                    var imageData = canvas.toDataURL("image/png");

                    // Create a link element
                    var downloadLink = document.createElement('a');
                    downloadLink.href = imageData;
                    var today = new Date();
                    var dd = String(today.getDate()).padStart(2, '0');
                    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
                    var yyyy = today.getFullYear();

                    var filename = 'SocialReport-' + yyyy + '-' + mm + '-' + dd + '.png';

                    downloadLink.download = filename; // Set the filename for the downloaded image


                    // Append the link to the document body and click it to trigger the download
                    document.body.appendChild(downloadLink);
                    downloadLink.click();

                    // Clean up: remove the link from the document body
                    document.body.removeChild(downloadLink);
                });
            });
    </script>


</body>

</html>
