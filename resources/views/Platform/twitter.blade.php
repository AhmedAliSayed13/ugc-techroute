<div class="table-responsive ">
    <table class="table table-bordered mb-0 border-black insatgram-table">
        <thead class="bg-purple">
            <tr class="table-head-twitter">
                <th colspan="5">
                    تـويـــتــر 
                    <i class="fab fa-twitter"></i>
                </th>
            </tr>
            <tr>
                <th>Account Name</th>
                <th>Num Of Posts </th>
                <th>Followers Before</th>
                <th>Followers After</th>
                <th>Difference</th>
            </tr>
            <tr>
                <th>اسم الحساب</th>
                <th>عدد ما تم طرحه </th>
                <th>عدد المتابعين (قبل)</th>
                <th>عدد المتابعين (بعد)</th>
                <th>الفارق بينهم</th>
            </tr>

        </thead>
        <tbody>
            @forelse ( $data->reports->where('platform_id',2) as $report)
                <tr class="bg-red total-tr">
                    <th ><a href="https://twitter.com/{{$report->platformAccount->username}}" target="_blank">{{$report->platformAccount->name}}</a></th>
                    <td>{{$report->posts}}</td>
                    <td>{{$report->before}}</td>
                    <td>{{$report->after}}</td>
                    <td class="difference">{{$report->difference}}</td>
                </tr>
                @empty
                <tr >
                    <th class="bg-red" colspan="5">لا يـوجد بيـانـات الرجاء انشاء التقرير</th>
                </tr>
        @endforelse

            
        </tbody>
        <tfoot>
            <tr class="bg-red total">
                <th >Total (المجموع)</th>
                <td >{{$data->reports->where('platform_id', 2)->sum('posts')}} <br> Posts</td>
                <td >{{$data->reports->where('platform_id', 2)->sum('before')}} <br> Followers</td>
                <td >{{$data->reports->where('platform_id', 2)->sum('after')}} <br> Followers</td>
                <td class="difference">{{$data->reports->where('platform_id', 2)->sum('difference')}} <br> Followers</td>
                
            </tr>
        </tfoot>
    </table>
</div>