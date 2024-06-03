@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Location Options'" :sectionUrl="route('admin.location-options.index')" :title="'List Location Options'" />
    <x-search :addUrl="route('admin.location-options.create')" :modelName="'LocationOption'" />



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
                                        @foreach ($data['locationOptions'] as $locationOption)
                                        <tr>
                                            <th scope="row">{{$locationOption->id}}</th>
                                            <td>{{$locationOption->name}}</td>
                                            <td>{!!$locationOption->is_active?'<span class="badge bg-success">ON</span>':'<span
                                                class="badge bg-danger">OFF</span>'!!}</td>

                                            <td>{{$locationOption->created_at}}</td>
                                            <td>
                                                <x-button_acttion :item="$locationOption" :id="$locationOption->id"
                                                    :location="route('admin.location-options.show',$locationOption->id)"
                                                    :edit="route('admin.location-options.edit',$locationOption->id)"
                                                    :delete="route('admin.location-options.destroy',$locationOption->id)" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['locationOptions']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
