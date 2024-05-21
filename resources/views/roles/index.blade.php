@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Roles'" :sectionUrl="route('roles.index')"
        :title="'List Roles'" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('roles.create')}}" type="button" class="btn btn-lg font-16 btn-primary m-2" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Role</a>

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
                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{$role->id}}</th>
                                        <td>{{$role->name}}</td>
                                        
                                        <td class=" d-flex">
                                            

                                            <x-button_acttion 
                                                            :item="$role" 
                                                            :id="$role->id" 
                                                            {{-- :show="route('roles.show',$role->id)"  --}}
                                                            :edit="route('roles.edit',$role->id)" 
                                                            :delete="route('roles.destroy',$role->id)"  />
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                                
                               
                            </tbody>
                        </table>
                        <div class="mt-4">
                        {{$roles->links("pagination::bootstrap-4")}}
                        </div>
                    </div> <!-- end table-responsive-->
                </div>    
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection


