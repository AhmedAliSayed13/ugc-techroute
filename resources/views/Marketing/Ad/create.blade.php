@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Ad'" :sectionUrl="route('ads.index')"
        :title="'Create Ads'" />


    


    




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            

                            <form method="POST" action="{{ route('ads.store') }}" class="form-horizontal"  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="customer" name="customer" value="" >
                                <input type="hidden" id="marketing_service_type" name="marketing_service_type" value="" >
                                <input type="hidden" id="product_id" name="product_id" value="" >
                                <x-FormSelect  :title="'Customers'" :name="'customer_id'" :options="$data['customers']"  :width="'12'"  />
                                <x-FormSelect  :title="'Orders'" :name="'order_id'" :options="[]"  :width="'12'"  />
                                <x-FormSelect  :title="'service'" :name="'marketing_service_type_id'" :options="[]"  :width="'12'"  />
                                <x-FormSelect  :title="'Category'" :name="'category_id'" :options="$data['categories']"  :width="'12'"  />
                                <x-FormInput :type="'time'" :title="'Time'" :name="'time'"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'Date'" :name="'date'"  :width="'12'" />
                                <x-FormFile :type="'file'" :title="'Medias'" :name="'medias[]'"  :width="'12'" :multiple="true" />
                                <x-FormTextarea  :title="'Details'" :name="'details'"  :width="'12'" />
                                <x-FormTextarea  :title="'Notes'" :name="'notes'"  :width="'12'" />                                
                                <x-FormSubmit  :title='"Create"'  />
                            </form>
                        </div> 

                        
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>

</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#customer_id').change(function () {
        var customerId = $(this).val();
        var customer = $('#customer_id option:selected').text();
        
        var url = "{{ route('get-order', ['customer_id' => ':id']) }}";
        url = url.replace(':id', customerId);
        $('#order_id').empty();
        $('#customer').empty();
        $('#marketing_service_type_id').empty();
        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {
                var items=response['data'];
                
                var options = '<option value="">please select option</option>';
                $.each(items, function (key, order) {
                    options += '<option value="' + order.id + '">' + order.name + '</option>';
                });
                
                $('#order_id').html(options);
                $('#customer').val(customer.trim());
            }
        });
    });
</script>

<script>
    $('#order_id').change(function () {
        var serviceId = $(this).val();
        
        var url = "{{ route('get-service', ['order_id' => ':id']) }}";
        url = url.replace(':id', serviceId);
        $('#marketing_service_type_id').empty();
        
        $.ajax({
            url: url,
            type: 'GET',
            success: function (response) {
                var items=response['data'];
                
                var options = '<option value="">please select option</option>';
                $.each(items, function (key, marketing_service_type) {
                    if(marketing_service_type.ordered_qty>marketing_service_type.delivered_qty){

                        options += '<option value="' + marketing_service_type.id + '">' + marketing_service_type.name + '</option>';
                    }else{
                        
                        options += '<option  disabled> ' + marketing_service_type.name + '</option>';
                    }
                });
                $('#marketing_service_type_id').html(options);
            }
        });
    });

    $('#marketing_service_type_id').change(function () {
        var marketing_service_type = $('#marketing_service_type_id option:selected').text();
        $('#marketing_service_type').val(marketing_service_type.trim());
        
    });
</script>

<script>
    $(document).ready(function() {
        $("select").select2({});
    });
</script>

@endsection


