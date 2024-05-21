<div class="table-responsive ">
    <table class="table table-bordered mb-0 border-black insatgram-table">
        <thead class="bg-purple">

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
        <tbody class="anoher">

            @php
            // telegram
            $report=$data->reports->where('platform_account_id',41)->first();
            @endphp
            @if($report)
            <tr class="bg-red total-tr">
                <th class="telegram">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif
            @php
                // nbd
                $report=$data->reports->where('platform_account_id',42)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="nbd">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
           @endif
           @php
                // tiktok
                $report=$data->reports->where('platform_account_id',43)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="tiktok">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif
           @php
                // youtube
                $report=$data->reports->where('platform_account_id',44)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="youtube">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif
           

           @php
                // snapchat
                $report=$data->reports->where('platform_account_id',45)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="snapchat">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}} مشترك</td>
                <td>{{$report->after}} مشاهده</td>
                <td> منذ {{$report->difference}} </td>
            </tr>
            @endif
            @php
                // barq_cast
                $report=$data->reports->where('platform_account_id',46)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="barq_cast">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
               
                <td colspan="2">{{$report->after}} مشاهده</td>
                <td>منذ {{$report->difference}} </td>
            </tr>
            @endif

            @php
            // ameed_threats
            $report=$data->reports->where('platform_account_id',47)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="bg-red" >{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif
            @php
            // ameed_threats
            $report=$data->reports->where('platform_account_id',48)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="bg-red">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif
            @php
            // ameed_threats
            $report=$data->reports->where('platform_account_id',49)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="bg-red">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif
            @php
            // ameed_threats
            $report=$data->reports->where('platform_account_id',50)->first();
            @endphp
             @if($report)
            <tr class="bg-red total-tr">
                <th class="bg-red">{{$report->platformAccount->name}}</th>
                <td>{{$report->posts}}</td>
                <td>{{$report->before}}</td>
                <td>{{$report->after}}</td>
                <td>{{$report->difference}}</td>
            </tr>
            @endif





        </tbody>

    </table>
</div>