@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .table-pink {
        background-color: rgba(246, 114, 167, .18);
        /* border-color: rgba(246,114,167,.12); */
    }

    .table-blue {
        background-color: rgba(74, 129, 212, .18);
        /* border-color: rgba(74,129,212,.12); */
    }
</style>
<style>
    /* Apply CSS to hide the arrow buttons */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        display: none;
    }

    input[type="number"] {
        -moz-appearance: textfield;
        /* Firefox */
    }
</style>
@endsection
@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Platform'" :sectionUrl="route('platforms.index')" :title="'Create Platforms'" />










    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">






                        <div class="col-xl-12">


                            <h4 class="header-title mb-3">التقرير اليومي ({{$data->day}})</h4>

                            <div id="basicwizard">

                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
                                    <li class="nav-item">
                                        <a href="#Instagram" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="fab fa-instagram me-1"></i>
                                            <span class="d-none d-sm-inline">Instagram</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#twitter" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2 ">
                                            <i class="fab fa-twitter me-1"></i>
                                            <span class="d-none d-sm-inline">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#platfroms" data-bs-toggle="tab" data-toggle="tab" id="platfroms_a"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="fas fa-rss me-1"></i>
                                            <span class="d-none d-sm-inline">Platfroms</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sms" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="fas fa-sms me-1"></i>
                                            <span class="d-none d-sm-inline">SMS</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#another" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="fas fa-certificate me-1"></i>
                                            <span class="d-none d-sm-inline">Another</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#top_rate" data-bs-toggle="tab" data-toggle="tab"
                                            class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            <span class="d-none d-sm-inline">Top Rate</span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content b-0 mb-0 pt-0">
                                    <div class="tab-pane" id="Instagram">
                                        <div class="row">
                                            @include('Platform.create.instgram_create')
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="twitter">
                                        <div class="row">
                                            @include('Platform.create.twitter_create')
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="platfroms">
                                        <div class="row">
                                            @include('Platform.create.platfroms_create')
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="sms">
                                        <div class="row">
                                            @include('Platform.create.sms_create')
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="another">
                                        <div class="row">
                                            @include('Platform.create.another_create')
                                        </div> <!-- end row -->
                                    </div>
                                    <div class="tab-pane" id="top_rate">
                                        <div class="row">
                                            @include('Platform.create.top_rate_create')
                                        </div> <!-- end row -->
                                    </div>



                                    <ul class="list-inline wizard mb-0">
                                        <li class="previous list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="btn btn-success btn-rounded">Previous</a>
                                        </li>
                                        <li class="next list-inline-item float-end">
                                            <a href="javascript: void(0);" class="btn btn-success btn-rounded">Next</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>


                        </div> <!-- end col -->








                    </div>





                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('script')

<!-- Plugins js-->
<script src="{{asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

<!-- Init js-->
<script src="{{asset('assets/js/pages/form-wizard.init.js')}}"></script>
<script>
    function setDiffrance(name){
        var before=$('#'+name+'_before').val();
        var after=$('#'+name+'_fol').val();
        var diffrance=after-before;
        $('#'+name+'_diffrance').val(diffrance);
    }
    $(document).ready(function() {
      $(".set_diffrance").each(function() {
        var elementID = $(this).attr("id");
        var name=elementID.replace('_diffrance', '');
        setDiffrance(name);
      });
    });

</script>

@endsection