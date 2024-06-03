@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Show Options'" :sectionUrl="route('admin.show-options.index')" :title="'List Show Options'" />
    <x-search :addUrl="route('admin.show-options.create')" :modelName="'ShowOption'" />



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
                                            <th>Account</th>

                                            <th> created at</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['showOptions'] as $showOption)
                                        <tr>
                                            <th scope="row">{{$showOption->id}}</th>
                                            <td>{{$showOption->name}}</td>
                                            <td>{!!$showOption->is_active?'<span class="badge bg-success">ON</span>':'<span
                                                class="badge bg-danger">OFF</span>'!!}</td>

                                            <td>{{$showOption->created_at}}</td>
                                            <td>
                                                <x-button_acttion :item="$showOption" :id="$showOption->id"
                                                    :show="route('admin.show-options.show',$showOption->id)"
                                                    :edit="route('admin.show-options.edit',$showOption->id)"
                                                    :delete="route('admin.show-options.destroy',$showOption->id)" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['showOptions']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
