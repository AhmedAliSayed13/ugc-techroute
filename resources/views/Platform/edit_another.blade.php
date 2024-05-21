<div class="table-responsive ">
    <table class="table table-bordered mb-0 border-black insatgram-table">
        <thead class="bg-purple">

            <tr>
                <th>Account Name</th>
                <th>Num Of Posts </th>
                <th>Followers Before </th>
                <th>Followers After </th>
            </tr>
            <tr>
                <th>اسم الحساب</th>
                <th>عدد ما تم طرحه </th>
                <th>عدد المتابعين / المشاهدات (قبل)</th>
                <th>عدد المتابعين / المشاهدات (بعد)</th>
            </tr>

        </thead>
        <tbody class="anoher">

        

            @foreach ($data->reports->where('platform_id',4) as $report)
                
            
                <tr class="bg-red total-tr">
                    <th class="{{$report->platformAccount->username}}">{{$report->platformAccount->name}}</th>
                    <input type="hidden" name="report_ids[]" value="{{$report->id}}">
                    <td>
                        <x-FormInput :type="'number'" :title="''" :name="'posts[]'" :value="$report->posts" :width="'12'" />
                    </td>
                    <td>
                        <x-FormInput :type="'number'" :title="''" :name="'after[]'" :value="$report->after"
                            :width="'12'" min="0" />
                    </td>
                    <td>
                        <x-FormInput :type="'number'" :title="''" :name="'before[]'" :value="$report->before"
                            :width="'12'" min="0" />
                    </td>

                </tr>
            @endforeach
            <tr class="bg-red">
                <td colspan="4" class="text-center">
                    <button type="submit" class=" pl-5 pr-5 btn btn-success btn-rounded waves-effect waves-light">حفظ البيانات</button>
                </td>
            </tr>
        





        </tbody>

    </table>
</div>