<div class="col-lg-12">

    <div class="card">
        <div class="card-header bg-success py-3 text-white">
            <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-bs-toggle="collapse" href="#cardCollpaseSMS" role="button" aria-expanded="true"
                    aria-controls="cardCollpase2" class=""><i class="mdi mdi-minus"></i></a>

            </div>
            <h4 class="card-title mb-0 text-white">SMS <i class=" fas fa-sms"></i></h4>
        </div>
        <div id="cardCollpaseSMS" class="collapse show" style="">
            <div class="card-body">
                <form method="post" action="{{route('save.sms')}}">
                    @csrf
                    <input type="hidden" name="day" value="{{$data->day}}">
                    <table class="table mb-0">
                        <thead>
                            <tr>

                                <th>Service</th>
                                <th>Num of SMS</th>
                                
                            </tr>
                            <tr>

                                <th>الخدمة</th>
                                <th> عدد ما تم ارسالة</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th class="bg-success text-center" scope="row">
                                    <a  target="_blank" class="text-white ">
                                        UAE BARQ	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_sms'" :width="'12'" :value="optional($data->platform)->uae_barq_sms ?? 0" />
                                </td>
                                

                            </tr>
                            
                            <tr>
                                <th class="bg-success text-center" scope="row">
                                    <a class="text-white ">
                                        SHARJAH BARQ	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'sharjah_barq_sms'" :width="'12'" :value="optional($data->platform)->sharjah_barq_sms ?? 0" />
                                </td>
                                

                            </tr>
                            <tr class="table-success">
                                <th class="bg-success text-center" scope="row">
                                    <a  class="text-white ">
                                        BARQ SPORT	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'barq_sport_sms'" :width="'12'" :value="optional($data->platform)->barq_sport_sms ?? 0" />
                                </td>
                                

                            </tr>
                            <tr >
                                <th class="bg-success text-center" scope="row">
                                    <a class="text-white ">
                                        FROM UAE	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'from_uae_sms'" :width="'12'" :value="optional($data->platform)->from_uae_sms ?? 0" />
                                </td>

                            </tr>
                        
                            <tr class="table-info">
                                <th class="bg-success text-center" scope="row">
                                    <a class="text-white ">
                                        AD BARQ	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'ad_barq_sms'" :width="'12'" :value="optional($data->platform)->ad_barq_sms ?? 0" />
                                </td>
                                

                            </tr>
                            <tr>
                                <th class="bg-success text-center" scope="row">
                                    <a  class="text-white ">
                                        DUBAI BARQ	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'dubai_barq_sms'" :width="'12'" :value="optional($data->platform)->dubai_barq_sms ?? 0" />
                                </td>
                                

                            </tr>
                            <tr class="table-warning">
                                <th class="bg-success text-center" scope="row">
                                    <a class="text-white ">
                                        UAE BARQ ENGLISH	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'uae_barq_English_sms'" :width="'12'" :value="optional($data->platform)->uae_barq_English_sms ?? 0" />
                                </td>
                                

                            </tr>

                            <tr>
                                <th class="bg-success text-center" scope="row">
                                    <a  class="text-white ">
                                        FROM UAE ENGLISH	
                                    </a>
                                </th>
                                <td>
                                    <x-FormInput :type="'number'" :name="'from_uae_english_sms'" :width="'12'" :value="optional($data->platform)->from_uae_english_sms ?? 0" />
                                </td>
                            

                            </tr>
                            <tr>
                                <td colspan="5" class="text-center">
                                    <button type="submit" class=" pl-5 pr-5 btn btn-success btn-rounded waves-effect waves-light">sync Data</button>
                                </td>
                            </tr>
                            
                            


                        

                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div> <!-- end card-->
</div>