<div class="col-lg-12">

    <div class="card">
        <div class="card-header bg-pink py-3 text-white">
            <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-bs-toggle="collapse" href="#cardCollpaseAnother" role="button" aria-expanded="true"
                    aria-controls="cardCollpase2" class=""><i class="mdi mdi-minus"></i></a>

            </div>
            <h4 class="card-title mb-0 text-white">Anothers <i class=" fas fa-certificate"></i></h4>
        </div>
        <div id="cardCollpaseAnother" class="collapse show" style="">
            <div class="card-body">
                <form method="post" action="{{route('save.another')}}">
                    @csrf
                    <input type="hidden" name="day" value="{{$data->day}}">
                    <table class="table mb-0">
                        <thead>
                            <tr>

                                <th>Service</th>
                                <th>Difference</th>
                                <th> Before</th>
                                <th> After</th>
                                <th>  Darq Daily Differential</th>
                                <th>  Darq Total Differential</th>
                            </tr>
                            <tr>

                                <th> الخدمة </th>
                                <th>الفارق بين قبل و بعد</th>
                                <th> قبل</th>
                                <th>  بعد</th>
                                <th>الفارق الكلي لبرق الامارات</th>
                                <th>الفارق اليومي لبرق الامارات</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="table-active">
                                <th class="bg-pink text-center" scope="row">
                                    <a  class="text-white ">
                                        عميد الامارات Threads
                                    </a>
                                </th>
                                <td >
                                    <x-FormInput :type="'number'" :name="'ameed_news_threads_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'ameed_news_threads_before'" :value="optional($data->beforePlatform)->ameed_news_threads_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ameed_news_threads\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'ameed_news_threads_fol'" :value="optional($data->platform)->ameed_news_threads_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'ameed_news_threads\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ameed_news_threads_fol_daily'" :value="optional($data->platform)->ameed_news_threads_fol_daily ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ameed_news_threads_fol_total'" :value="optional($data->platform)->ameed_news_threads_fol_total ?? 0" :width="'12'" />
                                </td>
                                

                            </tr>

                            <tr >
                                <th class="bg-pink text-center" scope="row">
                                    <a  class="text-white ">
                                        شبكة ابوظبي Threads
                                    </a>
                                </th>
                                <td >
                                    <x-FormInput :type="'number'" :name="'net_ad_threads_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'net_ad_threads_before'" :value="optional($data->beforePlatform)->net_ad_threads_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'net_ad_threads\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'net_ad_threads_fol'" :value="optional($data->platform)->net_ad_threads_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'net_ad_threads\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'net_ad_threads_fol_daily'" :value="optional($data->platform)->net_ad_threads_fol_daily ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'net_ad_threads_fol_total'" :value="optional($data->platform)->net_ad_threads_fol_total ?? 0" :width="'12'" />
                                </td>
                                

                            </tr>

                            <tr class="table-blue">
                                <th class="bg-pink text-center" scope="row">
                                    <a  class="text-white ">
                                        عميد الامارات 
                                    </a>
                                </th>
                                <td >
                                    <x-FormInput :type="'number'" :name="'ameed_news_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'ameed_news_before'" :value="optional($data->beforePlatform)->ameed_news_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ameed_news\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'ameed_news_fol'" :value="optional($data->platform)->ameed_news_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ameed_news\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ameed_news_fol_daily'" :value="optional($data->platform)->ameed_news_fol_daily ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ameed_news_fol_total'" :value="optional($data->platform)->ameed_news_fol_total ?? 0" :width="'12'" />
                                </td>
                                

                            </tr>

                            <tr >
                                <th class="bg-pink text-center" scope="row">
                                    <a  class="text-white ">
                                        شبكة ابوظبي 
                                    </a>
                                </th>
                                <td >
                                    <x-FormInput :type="'number'" :name="'net_ad_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'net_ad_before'" :value="optional($data->beforePlatform)->net_ad_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'net_ad\')'" />
                                </td>
                                <td >
                                    <x-FormInput :type="'number'" :name="'net_ad_fol'" :value="optional($data->platform)->net_ad_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'net_ad\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'net_ad_fol_daily'" :value="optional($data->platform)->net_ad_fol_daily ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'net_ad_fol_total'" :value="optional($data->platform)->net_ad_fol_total ?? 0" :width="'12'" />
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