<div class="col-lg-12">

    <div class="card">
        <div class="card-header bg-primary py-3 text-white">
            <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-bs-toggle="collapse" href="#cardCollpasePlatforms" role="button" aria-expanded="true"
                    aria-controls="cardCollpase2" class=""><i class="mdi mdi-minus"></i></a>

            </div>
            <h4 class="card-title mb-0 text-white">Platfroms <i class="fas fa-rss"></i></h4>
        </div>
        <div id="cardCollpasePlatforms" class="collapse show" style="">
            <div class="card-body">
                <form method="post" action="{{route('save.platforms')}}">
                    @csrf
                    <input type="hidden" name="day" value="{{$data->day}}">
                    <table class="table mb-0">
                        <thead>
                            <tr>

                                <th>Platform</th>
                                <th>Num of Posts</th>
                                <th>Followers Before</th>
                                <th>Followers After</th>
                                <th>Difference</th>
                            </tr>
                            <tr>

                                <th> المنصه </th>
                                <th> عدد ما تم طرحه</th>
                                <th>عدد المتابعين(قبل)</th>
                                <th>عدد المتابعين (بعد)</th>
                                <th>الفارق بينهم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th class="bg-primary text-center" scope="row">
                                    <a  class="text-white ">
                                        تلغرام
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'telegram_pst'" :value="optional($data->platform)->telegram_pst ?? 0" :width="'12'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'telegram_before'" :value="optional($data->beforePlatform)->telegram_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'telegram\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'telegram_fol'" :value="optional($data->platform)->telegram_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'telegram\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'telegram_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            
                            <tr >
                                <th class="bg-primary text-center" scope="row">
                                    <a  class="text-white ">
                                        نبض
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'nbd_pst'" :value="optional($data->platform)->nbd_pst ?? 0" :width="'12'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'nbd_before'" :value="optional($data->beforePlatform)->nbd_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'nbd\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'nbd_fol'" :value="optional($data->platform)->nbd_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'nbd\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'nbd_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            
                            <tr class="table-success">
                                <th class="bg-primary text-center" scope="row">
                                    <a  class="text-white ">
                                        يوتيوب
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'yt_pst'" :value="optional($data->platform)->yt_pst ?? 0" :width="'12'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'yt_before'" :value="optional($data->beforePlatform)->yt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'yt\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'yt_fol'" :value="optional($data->platform)->yt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'yt\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'yt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            
                            <tr >
                                <th class="bg-primary text-center" scope="row">
                                    <a  class="text-white ">
                                        تيك توك
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'tt_pst'" :value="optional($data->platform)->tt_pst ?? 0" :width="'12'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'tt_before'" :value="optional($data->beforePlatform)->tt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'tt\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'tt_fol'" :value="optional($data->platform)->tt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'tt\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'tt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>

                            <tr class="table-warning">
                                <th class="bg-primary text-center" scope="row">
                                    <a  class="text-white ">
                                        سناب
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'"  :name="'snap_pst'" :title="'ما تم طرحة'" :value="optional($data->platform)->snap_pst ?? 0" :width="'12'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'snap_viw'" :title="'المشاهدات'" :value="optional($data->platform)->snap_viw ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'snap\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'snap_fol'" :title="'الاشتركات'" :value="optional($data->platform)->snap_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'snap\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'time'" :name="'snap_tm'" :title="'الوقت'" :value="optional($data->platform)->snap_tm ?? NULL" :width="'12'"
                                        />
                                </td>

                            </tr>

                            <tr >
                                <th class="bg-primary text-center" scope="row">
                                    <a  class="text-white ">
                                        برق كاست
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'"  :name="'barq_cast_pst'" :title="'ما تم طرحة'" :value="optional($data->platform)->barq_cast_pst ?? 0" :width="'12'" />
                                </td>
                                <td colspan="2">
                                    <x-FormInput :type="'number'" :name="'barq_cast_viw'" :title="'المشاهدات'" :value="optional($data->platform)->barq_cast_viw ?? 0"  :width="'12'"
                                        />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'barq_cast_tm'" :title="'الاشتركات'" :value="optional($data->platform)->barq_cast_tm ?? 0"  :width="'12'"
                                        />
                                </td>
                                

                            </tr>
                            <tr>
                                <td colspan="5" class="text-center">
                                    <button type="submit" class=" pl-5 pr-5 btn btn-success btn-rounded waves-effect waves-light">Save Information</button>
                                </td>
                            </tr>

                            


                        

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div> <!-- end card-->
</div>