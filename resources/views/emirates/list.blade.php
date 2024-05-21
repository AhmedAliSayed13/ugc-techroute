@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">System</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Emirates</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
                <h4 class="page-title">List Emirates</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('emirates.create')}}" type="button" class="btn btn-lg font-16 btn-primary m-2" id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create New Emirate</a>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emirates as $emirate)
                                    <tr>
                                        <td >{{$emirate->id}}</td>
                                        <td>{{$emirate->name}}</td>
                                        <td>{{$emirate->created_at}}</td>
                                        
                                        <td class=" d-flex">
                                            <a href="{{route('emirates.edit',$emirate->id)}}" type="button" class="btn btn-soft-info  waves-effect waves-light "><i class="fas fa-user-edit"></i></a>
                                            <form action="{{route('emirates.destroy',$emirate->id)}}" method="post" style="margin-left: 10px">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="btn btn-soft-danger  waves-effect waves-light"><i class="fas fa-user-times"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                                
                               
                            </tbody>
                        </table>
                        <div class="mt-4">
                        {{$emirates->links("pagination::bootstrap-4")}}
                        </div>
                    </div> <!-- end table-responsive-->
                </div>    
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection


