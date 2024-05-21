@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Ad'" :sectionUrl="route('categories.index')"
        :title="'Create Categories'" />


    


    




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            

                            <form method="POST" action="{{ route('categories.store') }}" class="form-horizontal"  enctype="multipart/form-data">
                                @csrf
                                <x-FormInput :type="'name'" :title="'Name'" :name="'name'"  :width="'12'" />
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