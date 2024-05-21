@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Service Type'" :sectionUrl="route('service-types.index')"
        :title="'Create Service Types'" />


    


    




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            

                            <form method="POST" action="{{ route('service-types.store') }}" class="form-horizontal">
                                @csrf

                                <x-FormInput :type="'text'" :title="'Name'" :name="'name'"  :width="'12'" />
                                  
                               

                                
                                
                                
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