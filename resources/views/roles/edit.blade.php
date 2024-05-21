@extends('layouts.master')
@section('content')
<div class="container-fluid">
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
                        

                        <form method="POST" action="{{ route('roles.update',$role->id) }}" class="form-horizontal">
                            @csrf
                            @method('PATCH')

                            <x-FormInput :type="'text'" :title="'Name'" :name="'name'" :value="$role->name"  :width="'12'" />
                            <x-FormCheckbox  :title="'Permission'" :name="'permission[]'" :items="$permission"  :value="$rolePermissions" :width="'12'" />
                           
                            

                            
                            
                            
                            <x-FormSubmit  :title='"Edit"'  />
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
