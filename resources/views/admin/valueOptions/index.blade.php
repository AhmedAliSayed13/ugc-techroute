@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Options'" :sectionUrl="route('admin.main-options.index')"
        :title="'List Options'" />
    <x-search :addUrl="route('admin.value-options.create',$data['main_option_id'])" :modelName="'ValueOption'" />



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
                                        @foreach ($data['valueOptions'] as $valueOption)
                                        <tr>
                                            <th scope="row">{{$valueOption->id}}</th>
                                            <td>{{$valueOption->name}}</td>
                                            <td>{!!$valueOption->is_active?'<span
                                                    class="badge bg-success">ON</span>':'<span
                                                    class="badge bg-danger">OFF</span>'!!}</td>

                                            <td>{{$valueOption->created_at}}</td>
                                            <td>
                                                <x-button_acttion :item="$valueOption" :id="$valueOption->id"
                                                    :show="route('admin.value-options.show',$valueOption->id)"
                                                    :edit="route('admin.value-options.edit',$valueOption->id)"
                                                    :delete="route('admin.value-options.destroy',$valueOption->id)" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['valueOptions']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
