@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Options'" :sectionUrl="route('admin.main-options.index')" :title="'List Options'" />
    <x-search :addUrl="route('admin.main-options.create')" :modelName="'MainOption'" />



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
                                            <th>Title For Client</th>
                                            <th>Title For Creator</th>
                                            <th>Account</th>
                                            <th> created at</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['mainOptions'] as $mainOption)
                                        <tr>
                                            <th scope="row">{{$mainOption->id}}</th>
                                            <td>{{$mainOption->name_client}}</td>
                                            <td>{{$mainOption->name_creator}}</td>
                                            <td>{!!$mainOption->is_active?'<span
                                                    class="badge bg-success">ON</span>':'<span
                                                    class="badge bg-danger">OFF</span>'!!}</td>
                                            <td>{{$mainOption->created_at}}</td>
                                            <td>
                                                <?php
                                                        $items=['mdi-clipboard-list'=>route('admin.value-options.index',$mainOption->id)];
                                                    ?>
                                                <x-button_acttion :item="$mainOption" :id="$mainOption->id"
                                                    :show="route('admin.main-options.show',$mainOption->id)"
                                                    :edit="route('admin.main-options.edit',$mainOption->id)"
                                                    :delete="route('admin.main-options.destroy',$mainOption->id)"
                                                    :items="$items"
                                                     />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['mainOptions']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
