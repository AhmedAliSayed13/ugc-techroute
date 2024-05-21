






@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Users'" :sectionUrl="route('users.index')"
        :title="'Create Users'" />


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
                            

                            <form method="POST" action="{{ route('users.store') }}" class="form-horizontal">
                                @csrf

                                <x-FormInput :type="'text'" :title="'Name'" :name="'name'"  :width="'12'" />
                                <x-FormInput :type="'email'" :title="'Email'" :name="'email'"  :width="'12'" />
                                <x-FormSelect :options="$roles" :title="'Roles'" :name="'roles[]'"  :width="'12'" />
                                <x-FormInput :type="'password'" :title="'Password'" :name="'password'"  :width="'12'" />
                                <x-FormInput :type="'password'" :title="'Confirm Password'" :name="'confirm_password'"  :width="'12'" />
                                {{-- <x-FormCheckbox  :title="'Permission'" :name="'permission[]'" :items="$permission"  :width="'12'" /> --}}
                               
                               

                                
                                
                                
                                <x-FormSubmit  :title='"Create"'  />
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
