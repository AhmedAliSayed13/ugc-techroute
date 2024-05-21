@extends('layouts.master')

@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<style>
    div.upload {
        text-align: center;
        padding: 3%;
        border: thin solid black;
    }

    /* .upload input {
        display: none;
    } */

    .upload label {
        cursor: pointer;
    }

    #imageName {
        color: #7e57c2;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">System</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Customer</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form method="POST" action="{{ route('customers.update',$customer->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PUT') }}
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">Customer Name</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="name" value="{{old('name',$customer->name)}}" id="name"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Name">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">Start License Date</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="date" name="start_license" value="{{old('start_license',$customer->start_license)}}" id="start_license"
                                            class="form-control @error('start_license') is-invalid @enderror" placeholder="start_license">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">End License Date</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="date" name="end_license" value="{{old('end_license',$customer->end_license)}}" id="end_license"
                                            class="form-control @error('end_license') is-invalid @enderror" placeholder="end_license">

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="emirate" class="col-4 col-xl-3 col-form-label">Emirate</label>
                                    <div class="col-8 col-xl-9">
                                        <select name="emirate" data-toggle="select2" value="{{old('emirate')}}"
                                            id="emirate" class="form-control @error('emirate') is-invalid @enderror">
                                            <option value="">Select Emirate</option>
                                            @foreach ($emirates as $emirate )
                                            <option value="{{$emirate->id}}" {{($emirate->
                                                id==$customer->emirate_id)?'selected':''}} >{{$emirate->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-4 col-xl-3 col-form-label">Notes</label>
                                    <div class="col-8 col-xl-9">
                                        <textarea class="form-control @error('email') is-invalid @enderror"
                                            name="description" id="floatingTextarea2"
                                            style="height: 100px">{{$customer->description}}</textarea>

                                    </div>
                                </div>

                                {{-- <div class="row mb-3">

                                    <div class="col-12 col-xl-12 ">
                                        <div class="upload">
                                            <label for="inputTag">
                                                Select Files <br />
                                                <i class="fa fa-2x fa-file"></i>
                                                <input id="inputTag" name="medias[]" type="file" multiple />
                                                <br />
                                                <span id="imageName"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    {{-- <label for="medias" class="col-4 col-xl-3 col-form-label">Select Files</label>
                                    --}}
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

                                <div class="">
                                    <div class="row filterable-content">
                                        @foreach ($customer->medias as $media)
                                        @switch($media->type)
                                        @case('jpeg')
                                        @case('png')
                                        @case('gif')
                                        @case('webp')
                                        @case('apng')
                                        @case('avif')
                                        @case('jpg')
                                        <div class="col-sm-3 col-xl-3 filter-item all web illustrator">
                                            <div class="gal-box">
                                                <a href="{{$media->real_url}}" class="image-popup"
                                                    title="{{$media->name}}">
                                                    <img src="{{$media->real_url}}" class="img-fluid"
                                                        alt="work-thumbnail" style="height: 200px;width: 100%;">
                                                </a>
                                                <div class="gall-info">
                                                    <h4 class="font-16 mt-0">{{$media->name}}</h4>

                                                    <a href="{{route('media.delete',$media)}}"
                                                        class="btn btn-soft-danger  waves-effect waves"> <i
                                                            class="fas fa-trash"></i></a>


                                                </div>
                                            </div>
                                        </div>
                                        @break

                                        @case('mp4')
                                        @case('mov')
                                        @case('webm')
                                        <div class="col-sm-3 col-xl-3 filter-item all web illustrator">
                                            <div class="gal-box">
                                                <a href="{{$media->short_url}}" target="_blank"
                                                    title="{{$media->name}}">
                                                    <img src="{{asset('assets/images/video.jpg')}}" class="img-fluid"
                                                        alt="work-thumbnail" style="height: 220px;width:100%">
                                                </a>
                                                <div class="gall-info">
                                                    <h4 class="font-16 mt-0">{{$media->name}}</h4>
                                                    <a href="{{route('media.delete',$media)}}"
                                                        class="btn btn-soft-danger  waves-effect waves"> <i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @default
                                        <div class="col-sm-3 col-xl-3 filter-item all web illustrator">
                                            <div class="gal-box">
                                                <a href="{{$media->short_url}}" target="_blank"
                                                    title="{{$media->name}}">
                                                    <img src="{{asset('assets/images/file.png')}}" class="img-fluid"
                                                        alt="work-thumbnail" style="height: 220px;width:100%">
                                                </a>
                                                <div class="gall-info">
                                                    <h4 class="font-16 mt-0">{{$media->name}}</h4>
                                                    <a href="{{route('media.delete',$media)}}"
                                                        class="btn btn-soft-danger  waves-effect waves"> <i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endswitch

                                        @endforeach
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

  
</script>
<!-- Magnific Popup-->
<script src="{{asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<!-- Gallery Init-->
<script src="{{asset('assets/js/pages/gallery.init.js')}}"></script>
<script>
    function Copy(Url) 
    {
        navigator.clipboard.writeText(Url);
    }
</script>

@endsection