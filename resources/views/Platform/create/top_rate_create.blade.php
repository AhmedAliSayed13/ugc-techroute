<div class="col-lg-12">

    <div class="card">
        <div class="card-header bg-info py-3 text-white">
            <div class="card-widgets">
                <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                <a data-bs-toggle="collapse" href="#cardCollpaseTopRate" role="button" aria-expanded="true"
                    aria-controls="cardCollpase2" class=""><i class="mdi mdi-minus"></i></a>

            </div>
            <h4 class="card-title mb-0 text-white">Top Rate <i class="fas fa-chart-bar"></i></h4>
        </div>
        <div id="cardCollpaseTopRate" class="collapse show" style="">
            <div class="card-body">
                <form method="post" action="{{route('save.top')}}">
                    @csrf
                    <input type="hidden" name="day" value="{{$data->day}}">
                    <table class="table mb-0">
                        <thead>
                            <tr>

                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>

                                <th> النوع </th>
                                <th>الوصف</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="table-active">
                                <th class="bg-info text-center" scope="row">
                                    <a  class="text-white ">
                                        اعلي ريتويت 
                                    </a>
                                </th>
                                <td >
                                    <x-FormTextarea :type="'number'" :title="''" :name="'top_twt'"  :width="'12'"
                                    :value="optional($data->platform)->top_twt ?? null" />
                                </td>
                            
                                

                            </tr>

                            <tr >
                                <th class="bg-info text-center" scope="row">
                                    <a  class="text-white ">
                                        اعلي كومنت علي تويتر 
                                    </a>
                                </th>
                                <td >
                                    <x-FormTextarea :type="'number'" :title="''" :name="'top_twt_cmt'" :width="'12'"
                                    :value="optional($data->platform)->top_twt_cmt ?? null" />
                                </td>
                            
                                

                            </tr>

                            <tr class="table-blue">
                                <th class="bg-info text-center" scope="row">
                                    <a  class="text-white ">
                                        اعلي كومنت علي انستجرام 
                                    </a>
                                </th>
                                <td >
                                    <x-FormTextarea :type="'number'" :title="''" :name="'top_ig_cmt'" :width="'12'"
                                    :value="optional($data->platform)->top_ig_cmt ?? null" />
                                </td>
                            
                                

                            </tr>

                            <tr >
                                <th class="bg-info text-center" scope="row">
                                    <a  class="text-white ">
                                        اعلي مشاهدات علي تيك توك 
                                    </a>
                                </th>
                                <td >
                                    <x-FormTextarea :type="'number'" :title="''" :name="'top_tt'" :width="'12'"
                                    :value="optional($data->platform)->top_tt ?? null" />
                                </td>
                            
                                

                            </tr>

                            <tr class="table-waring">
                                <th class="bg-info text-center" scope="row">
                                    <a  class="text-white ">
                                        اعلي مشاهدات علي يوتيوب 
                                    </a>
                                </th>
                                <td >
                                    <x-FormTextarea :type="'number'" :title="''" :name="'top_yt'" :width="'12'"
                                    :value="optional($data->platform)->top_yt ?? null" />
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