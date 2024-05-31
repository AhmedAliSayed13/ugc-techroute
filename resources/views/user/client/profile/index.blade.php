@extends('user.client.layouts.master')
@section('breadcrumb')
<x-breadcrumb_user :section="'حسابي'" :sectionUrl="route('client.profile')" :title="'تعديل البيانات'" />
@endsection
@section('content')
<div class="container-fluid mt-4">
    <div class="row">

        User Is Client
    </div>
</div>
@endsection
