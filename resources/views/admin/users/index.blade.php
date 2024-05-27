@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Users'" :sectionUrl="route('admin.users.index')" :title="'List Users'" />
    <x-search :addUrl="route('admin.users.create')" :modelName="'User'" />



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Status</th>
                                            <th> created at</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['users'] as $user)
                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{!!$user->is_creator?'<span
                                                    class="badge bg-warning">Creator</span>':'<span
                                                    class="badge bg-info">Client</span>'!!}</td>
                                            <td>{!!$user->is_active?'<span class="badge bg-success">ON</span>':'<span
                                                    class="badge bg-danger">OFF</span>'!!}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                <x-button_acttion :item="$user" :id="$user->id"
                                                    :show="route('admin.users.show',$user->id)"
                                                    :edit="$user->is_creator?route('admin.users.creator.edit',$user->id):route('admin.users.client.edit',$user->id)"
                                                    :delete="route('admin.users.destroy',$user->id)" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['users']" />
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
