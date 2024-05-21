@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">System</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Emirates</a></li>
                        <li class="breadcrumb-item active">Edit Emirate</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Emirate</h4>
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
                            

                            <form method="POST" action="{{ route('emirates.update',$emirate->id) }}" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">Name</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="name" value="{{old('name',$emirate->name)}}" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                
                                
                                <div class="justify-content-end row">
                                    <div class="col-8 col-xl-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Update</button>
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
@endsection


