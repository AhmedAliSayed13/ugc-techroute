@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Roles'" :sectionUrl="route('roles.index')"
        :title="'Create Roles'" />


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
                            

                            <form method="POST" action="{{ route('roles.store') }}" class="form-horizontal">
                                @csrf

                                <x-FormInput :type="'text'" :title="'Name'" :name="'name'"  :width="'12'" />
                                <x-FormCheckbox  :title="'Permission'" :name="'permission[]'" :items="$permission"  :width="'12'" />
                               
                               

                                
                                
                                
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