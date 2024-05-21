@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Dashboard'" :sectionUrl="route('setting')"
        :title="'Settings'" />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('setting.save') }}" class="form-horizontal"  >
                                @csrf
                                <x-FormInput :type="'text'" :title="'Name'" :name="'name'" :value="Auth::user()->name" :width="'12'" />
                                <x-FormInput :type="'email'" :title="'Email'" :name="'email'" :value="Auth::user()->email"  :width="'12'" />
                                <x-FormSubmit  :title='"Save"'  />
                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
</div>
@endsection