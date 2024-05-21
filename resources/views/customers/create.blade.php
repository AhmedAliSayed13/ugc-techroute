@extends('layouts.master')

@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    div.upload {
        text-align: center;
        padding: 3%;
        border: thin solid black;
    }

    .upload input {
        /* display: none; */
    }

    .upload label {
        cursor: pointer;
    }

    #imageName {
        color: #7e57c2;
    }

    /* ::-webkit-file-upload-button {
        display: none;
        text-align: center
    } */
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">System</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
                <h4 class="page-title">Create Customer</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">



                    <div class="row">
                        <div class="col-lg-12">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul id="error-ul">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('customers.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="key" value="{{$key}}">
                                
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">Customer Name</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="name" value="{{old('name')}}" id="name"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Name">

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="emirate" class="col-4 col-xl-3 col-form-label">Emirate</label>
                                    <div class="col-8 col-xl-9">
                                        <select name="emirate" data-toggle="select2" value="{{old('emirate')}}"
                                            id="emirate" class="form-control @error('emirate') is-invalid @enderror">
                                            <option value="">Select Emirate</option>
                                            @foreach ($emirates as $emirate )
                                            <option value="{{$emirate->id}}">{{$emirate->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">Start License Date</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="date" name="start_license" value="{{old('start_license')}}" id="start_license"
                                            class="form-control @error('start_license') is-invalid @enderror" placeholder="start_license">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">End License Date</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="date" name="end_license" value="{{old('end_license')}}" id="end_license"
                                            class="form-control @error('end_license') is-invalid @enderror" placeholder="end_license">

                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="company" class="col-4 col-xl-3 col-form-label">company</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="company" value="{{old('company')}}" id="company"
                                            class="form-control @error('company') is-invalid @enderror" placeholder="company">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-4 col-xl-3 col-form-label">email</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="email" name="email" value="{{old('email')}}" id="email"
                                            class="form-control @error('email') is-invalid @enderror" placeholder="email">

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone1" class="col-4 col-xl-3 col-form-label">Phone 1</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="phone1" value="{{old('phone1')}}" id="phone1"
                                            class="form-control @error('phone1') is-invalid @enderror" placeholder="phone 1">

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="phone2" class="col-4 col-xl-3 col-form-label">Phone 2</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="phone2" value="{{old('phone2')}}" id="phone2"
                                            class="form-control @error('phone2') is-invalid @enderror" placeholder="phone 2">

                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="mobile1" class="col-4 col-xl-3 col-form-label">mobile 1</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="mobile1" value="{{old('mobile1')}}" id="mobile1"
                                            class="form-control @error('mobile1') is-invalid @enderror" placeholder="mobile 1">

                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="mobile2" class="col-4 col-xl-3 col-form-label">mobile 1</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="mobile2" value="{{old('mobile2')}}" id="mobile2"
                                            class="form-control @error('mobile2') is-invalid @enderror" placeholder="mobile 2">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="mailbox" class="col-4 col-xl-3 col-form-label">mailbox</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="mailbox" value="{{old('mailbox')}}" id="mailbox"
                                            class="form-control @error('mailbox') is-invalid @enderror" placeholder="mailbox">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="fax" class="col-4 col-xl-3 col-form-label">fax</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="fax" value="{{old('fax')}}" id="fax"
                                            class="form-control @error('fax') is-invalid @enderror" placeholder="fax">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label for="address" class="col-4 col-xl-3 col-form-label">address</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="address" value="{{old('address')}}" id="address"
                                            class="form-control @error('address') is-invalid @enderror" placeholder="address">
                                    </div>
                                </div>





                                <div class="row mb-3">
                                    <label for="email" class="col-4 col-xl-3 col-form-label">Notes</label>
                                    <div class="col-8 col-xl-9">
                                        <textarea class="form-control @error('description') is-invalid @enderror"
                                            name="description" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12 col-xl-12">
                                        <div class="upload">
                                            <label for="inputTag">
                                                <input type="file" name="medias[]" id="inputTag" multiple=""
                                                    class="form-control @error('medias') is-invalid @enderror">
                                                <br />
                                                <span id="imageName"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class=" row">
                                    <div class="col-12 col-xl-12">
                                        <button type="submit"
                                            class="btn btn-info waves-effect waves-light">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end col -->


                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
</div>

<div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content modal-filled bg-danger">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-wrong h1 text-white"></i>
                    <h4 class="mt-2 text-white">Oh snap!</h4>
                    <p class="mt-3 text-white" id="message-file-size"></p>
                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script>
    let input = document.getElementById("inputTag");
    
    let inputImages = document.querySelector("input[type=file]")
    input.addEventListener("change", ()=>{
        $('#imageName').html('');
        let inputImages = document.querySelector("input[type=file]").files;
        inputImages.forEach(element => {
            

            var numb = element.size / 1024 / 1024;
            numb = numb.toFixed(2);
            if (numb > 10) {
                
                $('#message-file-size').append('('+element.name+') too big, You maximum is 10MiB. Your file size is: ' + numb + ' MiB');
                $("#danger-alert-modal").modal('show');
                $('#inputTag').val('');
                $('#imageName').empty('');
            } else {
                imageName.innerText =imageName.innerText+'\n'+element.name;
            }
        });
    });

    // $('#inputTag').on('change', function() {
    //     var numb = $(this)[0].files[0].size / 1024 / 1024;
    //     numb = numb.toFixed(2);
    //     if (numb > 10) {
    //         alert('to big, maximum is 10MiB. You file size is: ' + numb + ' MiB');
    //     } else {
    //         alert('it okey, your file has ' + numb + 'MiB')
    //     }
    // });
</script>

@endsection