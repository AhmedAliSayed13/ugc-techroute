<div class="col-lg-12">

    <div class="card">
        <div class="card-header bg-blue py-3 text-white">
            <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-bs-toggle="collapse" href="#cardCollpaseTwitter" role="button" aria-expanded="true"
                    aria-controls="cardCollpase2" class=""><i class="mdi mdi-minus"></i></a>

            </div>
            <h4 class="card-title mb-0 text-white">Twitter <i class="fab fa-twitter"></i></h4>
        </div>
        <div id="cardCollpaseTwitter" class="collapse show" style="">
            <div class="card-body">
                <form method="post" action="{{route('save.twitter')}}">
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
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/UAE_BARQ" target="_blank" class="text-white ">
                                        تويتر العام
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'general_twt_pst'" :value="optional($data->platform)->general_twt_pst ?? 0" :value="optional($data->platform)->general_twt_pst ?? 0" :width="'12'" />
                                </td>
                                <td rowspan="2">
                                    <x-FormInput :type="'number'" :name="'general_twt_before'" :value="optional($data->beforePlatform)->general_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'general_twt\')'" />
                                </td>
                                <td rowspan="2">
                                    <x-FormInput :type="'number'" :name="'general_twt_fol'" :value="optional($data->platform)->general_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'general_twt\')'" />
                                </td>
                                <td rowspan="2">
                                    <x-FormInput :type="'number'" :name="'general_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-active">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/UAE_BARQ" target="_blank" class="text-white ">
                                        عدد الاعلانات
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'general_twt_ads'" :value="optional($data->platform)->general_twt_ads ?? 0" :width="'12'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/uae_barq" target="_blank" class="text-white ">
                                        طلعة برق
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_twt_pst'"  :value="optional($data->platform)->talaat_barq_twt_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_twt_before'" :value="optional($data->beforePlatform)->talaat_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'talaat_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_twt_fol'" :value="optional($data->platform)->talaat_barq_twt_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'talaat_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'talaat_barq_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-success">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/barq_traffic" target="_blank" class="text-white ">
                                        طلعة الطرق
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_twt_pst'" :value="optional($data->platform)->barq_traffic_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_twt_before'" :value="optional($data->beforePlatform)->barq_traffic_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_traffic_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_twt_fol'" :value="optional($data->platform)->barq_traffic_twt_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'barq_traffic_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_traffic_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>

                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/barq_khair" target="_blank" class="text-white ">
                                        برق الخير
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_twt_pst'" :value="optional($data->platform)->barq_khair_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_twt_before'" :value="optional($data->beforePlatform)->barq_khair_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_khair_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_twt_fol'" :value="optional($data->platform)->barq_khair_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barq_khair_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_khair_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-info">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/ad_barq" target="_blank" class="text-white ">
                                        برق أبوظبي
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_twt_pst'" :value="optional($data->platform)->ad_barq_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_twt_before'" :value="optional($data->beforePlatform)->ad_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ad_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_twt_fol'" :value="optional($data->platform)->ad_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ad_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/dxb_barq" target="_blank" class="text-white ">
                                        برق دبي
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_twt_pst'" :value="optional($data->platform)->dxb_barq_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_twt_before'" :value="optional($data->beforePlatform)->dxb_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'dxb_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_twt_fol'" :value="optional($data->platform)->dxb_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'dxb_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dxb_barq_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-warning">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/shj_barq" target="_blank" class="text-white ">
                                        برق الشارقة
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_twt_pst'" :value="optional($data->platform)->shj_barq_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_twt_before'" :value="optional($data->beforePlatform)->shj_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'shj_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_twt_fol'" :value="optional($data->platform)->shj_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'shj_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'shj_barq_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>

                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/ajm_barq" target="_blank" class="text-white ">
                                        برق عجمان
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_twt_pst'" :value="optional($data->platform)->ajm_barq_twt_pst ?? 0" :value="optional($data->platform)->ajm_barq_twt_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_twt_before'" :value="optional($data->beforePlatform)->ajm_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajm_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_twt_fol'" :value="optional($data->platform)->ajm_barq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajm_barq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajm_barq_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-primary">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/barquaq" target="_blank" class="text-white ">
                                        برق أم القيوين
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_twt_pst'" :value="optional($data->platform)->barquaq_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_twt_before'" :value="optional($data->beforePlatform)->barquaq_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barquaq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_twt_fol'" :value="optional($data->platform)->barquaq_twt_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'barquaq_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barquaq_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/barqrak_" target="_blank" class="text-white ">
                                        برق رأس الخيمة
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_twt_pst'" :value="optional($data->platform)->barqrak_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_twt_before'" :value="optional($data->beforePlatform)->barqrak_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqrak_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_twt_fol'" :value="optional($data->platform)->barqrak_twt_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'barqrak_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqrak_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-pink">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/barqfuj" target="_blank" class="text-white ">
                                        برق الفجيرة
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_twt_pst'" :value="optional($data->platform)->barqfuj_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_twt_before'" :value="optional($data->beforePlatform)->barqfuj_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqfuj_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_twt_fol'" :value="optional($data->platform)->barqfuj_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqfuj_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqfuj_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/barqhealth" target="_blank" class="text-white ">
                                        بـرق الصـحـة

                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_twt_pst'" :value="optional($data->platform)->barqhealth_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_twt_before'" :value="optional($data->beforePlatform)->barqhealth_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'barqhealth_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_twt_fol'" :value="optional($data->platform)->barqhealth_twt_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'barqhealth_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barqhealth_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr class="table-blue">
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/uae_barq_en" target="_blank" class="text-white ">
                                        برق English
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_twt_pst'" :value="optional($data->platform)->uae_barq_en_twt_pst ?? 0"  :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_twt_before'" :value="optional($data->beforePlatform)->uae_barq_en_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'uae_barq_en_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_twt_fol'" :value="optional($data->platform)->uae_barq_en_twt_fol ?? 0"  :width="'12'"
                                        :change="'setDiffrance(\'uae_barq_en_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_en_twt_diffrance'" :width="'12'"
                                        :disable="1" :class="'set_diffrance'" />
                                </td>

                            </tr>
                            <tr>
                                <th class="bg-blue text-center" scope="row">
                                    <a href="https://twitter.com/uae_ajil" target="_blank" class="text-white ">
                                        عاجل الامارات
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_twt_pst'" :value="optional($data->platform)->ajil_twt_pst ?? 0" :width="'12'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_twt_before'" :value="optional($data->beforePlatform)->ajil_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajil_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_twt_fol'" :value="optional($data->platform)->ajil_twt_fol ?? 0" :width="'12'"
                                        :change="'setDiffrance(\'ajil_twt\')'" />
                                </td>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ajil_twt_diffrance'" :width="'12'" :disable="1" :class="'set_diffrance'" />
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