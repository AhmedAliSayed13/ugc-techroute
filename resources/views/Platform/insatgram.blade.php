<div class="table-responsive ">
    <table class="table table-bordered mb-0 border-black insatgram-table">
        <thead class="bg-purple">
            <tr class="table-head-insatgram">
                <th colspan="5">
                    انستجــرام 
                    <i class="fab fa-instagram"></i>
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
            @forelse ( $data->reports->where('platform_id',1) as $report)
                    <tr>
                        <th class="bg-red"><a href="https://www.instagram.com/{{$report->platformAccount->username}}" target="_blank">{{$report->platformAccount->name}}</a></th>
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
                <td >{{$data->reports->where('platform_id', 1)->sum('posts')}} <br> Posts</td>
                <td >{{$data->reports->where('platform_id', 1)->sum('before')}} <br> Followers</td>
                <td >{{$data->reports->where('platform_id', 1)->sum('after')}} <br> Followers</td>
                <td class="difference">{{$data->reports->where('platform_id', 1)->sum('difference')}} <br> Followers</td>
                
            </tr>
        </tfoot>
    </table>
</div>