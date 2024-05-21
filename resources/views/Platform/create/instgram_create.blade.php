<div class="col-lg-12">

    <div class="card">
        <div class="card-header bg-danger py-3 text-white">
            <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-bs-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="true"
                    aria-controls="cardCollpase2" class=""><i class="mdi mdi-minus"></i></a>

            </div>
            <h4 class="card-title mb-0 text-white">Instagram <i class="fab fa-instagram"></i></h4>
        </div>
        <div id="cardCollpase4" class="collapse show" style="">
            <div class="card-body">
                <form method="post" action="{{route('save.instagram')}}">
                    @csrf
                    <input type="hidden" name="day" value="{{$data->day}}">
                    <table class="table mb-0">
                        <thead>
                            <tr>

                                <th>Account Number</th>
                                <th>Num of Posts</th>
                                <th>Followers Before</th>
                                <th>Followers After</th>
                                <th>Difference</th>
                            </tr>
                            <tr>

                                <th>اسم الحساب </th>
                                <th> عدد ما تم طرحه</th>
                                <th>عدد المتابعين(قبل)</th>
                                <th>عدد المتابعين (بعد)</th>
                                <th>الفارق بينهم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/uae_barq" target="_blank" class="text-white ">
                                        انستجرام العام
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'general_ig_pst'" :value="optional($data->platform)->general_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td rowspan="2">
                                    <x-FormInput :type="'number'" :name="'general_ig_before'" :value="optional($data->beforePlatform)->general_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'general_ig\')'" />
                                </td>
                                <td rowspan="2">
                                    <x-FormInput :type="'number'" :name="'general_ig_fol'" :value="optional($data->platform)->general_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'general_ig\')'" />
                                </td>
                                <td rowspan="2">
                                    <x-FormInput :type="'number'" :name="'general_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-active">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/uae_barq" target="_blank" class="text-white ">
                                        عدد الاعلانات
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'general_ig_ads'" :value="optional($data->platform)->general_ig_ads ?? 0" :width="'12'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/talaat_barq" target="_blank" class="text-white ">
                                        طلعة برق
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_ig_pst'" :value="optional($data->platform)->talaat_barq_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_ig_before'" :value="optional($data->beforePlatform)->talaat_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'talaat_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_ig_fol'" :value="optional($data->platform)->talaat_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'talaat_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-success">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/barq_traffic" target="_blank" class="text-white ">
                                        طلعة الطرق
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_ig_pst'" :value="optional($data->platform)->barq_traffic_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_ig_before'" :value="optional($data->beforePlatform)->barq_traffic_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_traffic_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_ig_fol'" :value="optional($data->platform)->barq_traffic_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_traffic_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>

                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/barq_khair" target="_blank" class="text-white ">
                                        برق الخير
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_ig_pst'" :value="optional($data->platform)->barq_khair_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_ig_before'" :value="optional($data->beforePlatform)->barq_khair_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_khair_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_ig_fol'" :value="optional($data->platform)->barq_khair_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_khair_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-info">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/ad_barq" target="_blank" class="text-white ">
                                        برق أبوظبي
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_ig_pst'" :value="optional($data->platform)->ad_barq_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_ig_before'" :value="optional($data->beforePlatform)->ad_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ad_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_ig_fol'" :value="optional($data->platform)->ad_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ad_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/dxb_barq" target="_blank" class="text-white ">
                                        برق دبي
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_ig_pst'" :value="optional($data->platform)->dxb_barq_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_ig_before'" :value="optional($data->beforePlatform)->dxb_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'dxb_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_ig_fol'" :value="optional($data->platform)->dxb_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'dxb_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-warning">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/shj_barq" target="_blank" class="text-white ">
                                        برق الشارقة
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_ig_pst'" :value="optional($data->platform)->shj_barq_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_ig_before'" :value="optional($data->beforePlatform)->shj_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'shj_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_ig_fol'" :value="optional($data->platform)->shj_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'shj_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>

                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/ajm_barq" target="_blank" class="text-white ">
                                        برق عجمان
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_ig_pst'" :value="optional($data->platform)->ajm_barq_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_ig_before'" :value="optional($data->beforePlatform)->ajm_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajm_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_ig_fol'" :value="optional($data->platform)->ajm_barq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajm_barq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-primary">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/barquaq" target="_blank" class="text-white ">
                                        برق أم القيوين
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_ig_pst'" :value="optional($data->platform)->barquaq_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_ig_before'" :value="optional($data->beforePlatform)->barquaq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barquaq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_ig_fol'" :value="optional($data->platform)->barquaq_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barquaq_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/barqrak_" target="_blank" class="text-white ">
                                        برق رأس الخيمة
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_ig_pst'" :value="optional($data->platform)->barqrak_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_ig_before'" :value="optional($data->beforePlatform)->barqrak_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqrak_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_ig_fol'" :value="optional($data->platform)->barqrak_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqrak_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-pink">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/barqfuj" target="_blank" class="text-white ">
                                        برق الفجيرة
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_ig_pst'" :value="optional($data->platform)->barqfuj_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_ig_before'" :value="optional($data->beforePlatform)->barqfuj_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqfuj_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_ig_fol'" :value="optional($data->platform)->barqfuj_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqfuj_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/barqhealth" target="_blank" class="text-white ">
                                        بـرق الصـحـة

                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_ig_pst'" :value="optional($data->platform)->barqhealth_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_ig_before'" :value="optional($data->beforePlatform)->barqhealth_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqhealth_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_ig_fol'" :value="optional($data->platform)->barqhealth_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqhealth_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-blue">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/uae_barq_en" target="_blank" class="text-white ">
                                        برق English
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_ig_pst'" :value="optional($data->platform)->uae_barq_en_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_ig_before'" :value="optional($data->beforePlatform)->uae_barq_en_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'uae_barq_en_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_ig_fol'" :value="optional($data->platform)->uae_barq_en_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'uae_barq_en_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="https://www.instagram.com/uae_ajil" target="_blank" class="text-white ">
                                        عاجل الامارات
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_ig_pst'" :value="optional($data->platform)->ajil_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_ig_before'" :value="optional($data->beforePlatform)->ajil_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajil_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_ig_fol'" :value="optional($data->platform)->ajil_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajil_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_ig_diffrance'" :width="'12'" :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-active">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="#" target="_blank" class="text-white ">
                                        UAE Barq Threads
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uea_barq_threads_ig_pst'" :value="optional($data->platform)->uea_barq_threads_ig_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uea_barq_threads_ig_before'" :value="optional($data->beforePlatform)->uea_barq_threads_ig_fol ?? 0"
                                        :width="'12'" :change="'setDiffrance(\'uea_barq_threads_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uea_barq_threads_ig_fol'" :value="optional($data->platform)->uea_barq_threads_ig_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'uea_barq_threads_ig\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uea_barq_threads_ig_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-danger text-center" scope="row">
                                    <a href="#" target="_blank" class="text-white ">
                                        انستا استوري
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :title="'ما تم طرحة'" :name="'story_ar_ig_pst'" :value="optional($data->platform)->story_ar_ig_pst ?? 0"
                                        :width="'12'" />
                                </td>
                                <td colspan="2">
                                    <x-FormInput :type="'number'" :title="'المشاهدات'" :name="'story_ar_ig_viw'" :value="optional($data->platform)->story_ar_ig_viw ?? 0"
                                        :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'time'" :title="'الوقت'" :name="'story_ar_ig_tm'" :width="'12'" :value="optional($data->platform)->story_ar_ig_tm ?? 0"  />
                                </td>


                            </tr>
                            <tr class="table-success">
                                <th class="bg-danger text-center" scope="row">
                                    <a href="#" target="_blank" class="text-white ">
                                        Insta Story En
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :title="'ما تم طرحة'" :name="'story_en_ig_pst'" :value="optional($data->platform)->story_en_ig_pst ?? 0"
                                        :width="'12'" />
                                </td>
                                <td colspan="2">
                                    <x-FormInput :type="'number'" :title="'المشاهدات'" :name="'story_en_ig_viw'" :value="optional($data->platform)->story_en_ig_viw ?? 0"
                                        :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'time'" :title="'الوقت'" :name="'story_en_ig_tm'" :width="'12'" :value="optional($data->platform)->story_en_ig_tm ?? null" />
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