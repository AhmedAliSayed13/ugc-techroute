@extends('layouts.master')

@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .download-svg {

        margin: auto;
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">System</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
                <h4 class="page-title">List Customers</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Filter</h4>


                    <div class="row">

                        <form>
                            
                            <div class="col-lg-6 float-start p-1">
                                <div class="mb-3">
                                    <label for="emirate" class="form-label">Emirates</label>
                                    <select  name="emirate" data-toggle="select2" value="{{old('emirate')}}" id="emirate" class="form-control @error('emirate') is-invalid @enderror">
                                        <option value="">Select Emirate</option>
                                        @foreach ($emirates as $emirate )
                                            <option value="{{$emirate->id}}" {{($emirate->id==$emirate_id)?'selected':''}} >{{$emirate->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @if(auth()->user()->is_admin)
                            <div class="col-lg-6 float-start p-1">
                                <div class="mb-3">
                                    <label for="user" class="form-label">Uploader By</label>
                                    <select  name="user" data-toggle="select2" value="{{old('user')}}" id="user" class="form-control @error('user') is-invalid @enderror">
                                        <option value="">Select User</option>
                                        @foreach ($users as $user )
                                            <option value="{{$user->id}}" {{($user->id==$user_id)?'selected':''}} >{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="col-lg-6 float-start p-1">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" name="name" value="{{$name}}" class="form-control">
                                </div>
                            </div>


                            <div class="col-lg-12 float-start p-1">

                            <button  type="submit" class="btn btn-lg font-16 btn-primary m-2"
                            id="btn-new-event"><i class="mdi mdi-search"></i> Search</button>
                            </div>




                        </form>



                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('customers.create')}}" type="button" class="btn btn-lg font-16 btn-primary m-2"
                        id="btn-new-event"><i class="mdi mdi-plus-circle-outline"></i> Create Customer</a>

                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>emirate</th>
                                    <th>Files</th>
                                    <th>Start License</th>
                                    <th>End License</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Phone1</th>
                                    <th>Phone2</th>
                                    <th>Mobile1</th>
                                    <th>Mobile2</th>
                                    <th>Mailbox</th>
                                    <th>Fax</th>
                                    <th>Address</th>
                                    <th>Upload By</th>
                                    <th>Date</th>
                                    <th>Copy Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                <tr>
                                    <th scope="row">{{$customer->id}}</th>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->emirate->name}}</td>
                                    <td><span class="badge badge-soft-success">{{$customer->medias->count()}}</span></td>
                                    <td>{{$customer->start_license??'-'}}</td>
                                    <td>{{$customer->end_license??'-'}}</td>
                                    <td>{{$customer->company??'-'}}</td>
                                    <td>{{$customer->email??'-'}}</td>
                                    <td>{{$customer->phone1??'-'}}</td>
                                    <td>{{$customer->phone2??'-'}}</td>
                                    <td>{{$customer->mobile1??'-'}}</td>
                                    <td>{{$customer->mobile2??'-'}}</td>
                                    <td>{{$customer->mailbox??'-'}}</td>
                                    <td>{{$customer->fax??'-'}}</td>
                                    <td>{{$customer->address??'-'}}</td>
                                    <td><img src="{{asset('assets/images/users/user.png')}}" alt="table-user"
                                            width="20px" class="me-2 rounded-circle">{{$customer->user->name}}</td>
                                    <td>{{$customer->created_at}}</td>
                                    <td>
                                        <button title="{{$customer->short_url}}"
                                            onclick="Copy('{{$customer->short_url}}')"
                                            class="btn btn-soft-primary  waves-effect waves-light"><i
                                                class="fas fa-copy"></i> </button>

                                    </td>

                                    <td class=" d-flex">
                                        <a href="{{route('customers.show',$customer)}}"
                                            class="btn btn-soft-success  waves-effect waves-light"><i
                                                class="fas fa-eye"></i> </a>

                                        <a style="margin-left: 10px" href="{{route('customers.edit',$customer->id)}}"
                                            type="button" class="btn btn-soft-info  waves-effect waves-light "><i
                                                class="fas fa-user-edit"></i></a>
                                        <form action="{{route('customers.destroy',$customer->id)}}" method="post"
                                            style="margin-left: 10px">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-soft-danger  waves-effect waves-light"><i
                                                    class="fas fa-user-times"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                        <div class="mt-4">
                            
                            {!! $customers->appends(Request::except('page'))->render("pagination::bootstrap-4") !!}
                        </div>
                    </div> <!-- end table-responsive-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
<script>
    function Copy(Url) 
    {
        navigator.clipboard.writeText(Url);
    }
</script>
@endsection