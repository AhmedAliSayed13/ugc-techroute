@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Roles'" :sectionUrl="route('roles.index')"
        :title="'Edit Roles'" />


    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            

                            <form method="POST" action="{{ route('users.update',$user->id) }}" class="form-horizontal">
                                @csrf
                                @method('PUT')
                                {{-- <div class="row mb-3">
                                    <label for="name" class="col-4 col-xl-3 col-form-label">Name</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="text" name="name" value="{{old('name',$user->name)}}" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-4 col-xl-3 col-form-label">Email</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="email" name="email" value="{{old('email',$user->email)}}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-4 col-xl-3 col-form-label">Password</label>
                                    <div class="col-8 col-xl-9">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <x-FormInput :type="'text'" :title="'Name'" :name="'name'"  :width="'12'" :value="$user->name" />
                                <x-FormInput :type="'email'" :title="'Email'" :name="'email'"  :width="'12'" :value="$user->email" />
                                <x-FormSelect :options="$roles" :title="'Roles'" :name="'roles[]'"  :width="'12'" :value="$userRole"/>
                                
                                
                                <x-FormSubmit  :title='"Update"'  />
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


