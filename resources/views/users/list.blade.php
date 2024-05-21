@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Users'" :sectionUrl="route('users.index')"
        :title="'List Users'" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('users.create')}}" type="button" class="btn btn-lg font-16 btn-primary m-2" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New User</a>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        
                                        <td class=" d-flex">
                                            

                                            <x-button_acttion 
                                                            :item="$user" 
                                                            :id="$user->id" 
                                                            :show="route('users.show',$user->id)" 
                                                            :edit="route('users.edit',$user->id)" 
                                                            :delete="route('users.destroy',$user->id)"  />
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                                
                               
                            </tbody>
                        </table>
                        <div class="mt-4">
                        {{$users->links("pagination::bootstrap-4")}}
                        </div>
                    </div> <!-- end table-responsive-->
                </div>    
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection


