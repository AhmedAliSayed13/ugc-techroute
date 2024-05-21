@extends('layouts.master')
@section('content')
<div class="container-fluid">
<x-breadcrumb :section="'Service Types'" :sectionUrl="route('service-types.index')"
        :title="'Edit Service Types'" />
















<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                

                <div class="row">
                    <div class="col-lg-12">
                        

                        <form method="POST" action="{{ route('service-types.update',$data['marketingServiceType']->id) }}" class="form-horizontal">
                            @csrf
                            @method('PATCH')

                            <x-FormInput :type="'text'" :title="'Name'" :name="'name'" :value="$data['marketingServiceType']->name"  :width="'12'" />
                           
                            

                            
                            
                            
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
