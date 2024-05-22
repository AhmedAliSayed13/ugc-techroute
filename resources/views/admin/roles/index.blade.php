@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Roles'" :sectionUrl="route('admin.roles.index')"
        :title="'List Roles'" />
    <x-search :addUrl="route('admin.roles.create')"  :modelName="'Role'" />



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

                                                    <th> created at</th>
                                                    <th> Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['roles'] as $role)
                                                <tr>
                                                    <th scope="row">{{$role->id}}</th>
                                                    <td>{{$role->name}}</td>

                                                    <td>{{$role->created_at}}</td>
                                                    <td>
                                                        <x-button_acttion
                                                            :item="$role"
                                                            :id="$role->id"
                                                            :show="route('admin.roles.show',$role->id)"
                                                            :edit="route('admin.roles.edit',$role->id)"
                                                            :delete="route('admin.roles.destroy',$role->id)"  />
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <x-pagination  :items="$data['roles']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
