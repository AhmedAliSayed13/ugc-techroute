@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Surveys'" :sectionUrl="route('surveys.index')" :title="'List Surveys'" />
    <x-search :addUrl="route('surveys.create')" :modelName="'Survey'" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Key</th>
                                    <th>Answer</th>
                                    <th>Yes Url</th>
                                    <th>No Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['surveys'] as $survey)
                                <tr>
                                    <th scope="row">{{$survey->id}}</th>

                                    <td>{{$survey->email}}</td>
                                    <td>{{$survey->key}}</td>
                                    <td>{!!getAnswer($survey->answer)!!}</td>
                                    <td><a href="{{$survey->YesUrl()}}" 
                                            class="btn btn-soft-info waves-effect waves-light copyLink">Copy Yes URL</a></td>
                                    <td><a href="{{$survey->NoUrl()}}"
                                            class="btn btn-soft-warning waves-effect waves-light copyLink">Copy No URL</a></td>
                                    <td class=" d-flex">
                                        <x-button_acttion :item="$survey" :id="$survey->id"
                                            :show="route('surveys.show',$survey->id)"
                                            :edit="route('surveys.edit',$survey)"
                                            :delete="route('surveys.destroy',$survey->id)" />
                                    </td>
                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                        <div class="mt-4">
                            <x-pagination :items="$data['surveys']" />
                        </div>
                    </div> <!-- end table-responsive-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
<script src="{{asset('assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
{{-- <script src="{{asset('assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
<script src="{{asset('assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script> --}}
<script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>

<script>
    $(document).ready(function () {
        // Attach click event to all elements with the class 'copyLink'
        $('.copyLink').on('click', function () {
            // Get the href attribute value of the clicked element
            var hrefToCopy = $(this).attr('href');

            // Create a temporary input element
            var tempInput = $('<input>').val(hrefToCopy);
            $('body').append(tempInput);

            // Select the text inside the input
            tempInput.select();
            tempInput[0].setSelectionRange(0, 99999); // For mobile devices

            // Copy the text to the clipboard
            document.execCommand('copy');

            // Remove the temporary input element
            tempInput.remove();

            // Optionally, you can prevent the default link behavior
            // For example, if the link should not navigate
            event.preventDefault();
            alert('URL Copied to Clipboard!');
        });
    });
</script>
@endsection