<div class="col-10 m-auto">
    <table class="table table-bordered mt-5 border-black sms-table">
        <thead>
            <tr class="head-tbale-tr bg-red">
                <th colspan="2" >الرسـائـل</th>
                
                
            </tr>
        </thead>
        <tbody>
            @forelse ( $data->reports->where('platform_id',3) as $report)
            <tr>
                
                <td>{{$report->platformAccount->name}}</td>
                <td>{{$report->posts}}</td>
                
            </tr>
            @empty
            <tr >
                <th class="bg-red text-center" colspan="2">لا يـوجد بيـانـات  </th>
            </tr>
    @endforelse
            
            
        </tbody>
    </table>

</div>
<div class="col-10 m-auto mt-5 mb-5">
    <img src="{{asset('assets/images/barq.png')}}">
</div>