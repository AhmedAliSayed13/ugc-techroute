@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Service Types'" :sectionUrl="route('service-types.index')"
        :title="'List Service Types'" />

        <x-search 
        :addUrl="route('service-types.create')"
        :modelName="'MarketingServiceType'"
         />


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <a href="{{route('service-types.create')}}" type="button" class="btn btn-lg font-16 btn-primary m-2" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Service Type</a> --}}

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['marketingServiceTypes'] as $marketingServiceType)
                                    <tr>
                                        <th scope="row">{{$marketingServiceType->id}}</th>
                                        <td>{{$marketingServiceType->name}}</td>
                                        
                                        <td class=" d-flex">
                                            

                                            <x-button_acttion 
                                                            :item="$marketingServiceType" 
                                                            :id="$marketingServiceType->id" 
                                                            :show="route('service-types.show',$marketingServiceType->id)" 
                                                            :edit="route('service-types.edit',$marketingServiceType)" 
                                                            :delete="route('service-types.destroy',$marketingServiceType->id)"  />
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                                
                               
                            </tbody>
                        </table>
                        <div class="mt-4">
                        {{-- {{$data['marketingServiceTypes']->withQueryString()->links("pagination::bootstrap-4")}} --}}
                        <x-pagination  :items="$data['marketingServiceTypes']" />    
                    </div>
                    </div> <!-- end table-responsive-->
                </div>    
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection


