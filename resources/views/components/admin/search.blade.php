<div class="row">


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <form class="d-flex flex-wrap align-items-center">

                        </form>
                    </div>

                    <div class="col-md-4">
                        <div class="text-md-end mt-3 mt-md-0">
                            <button type="button" class="btn btn-success waves-effect waves-light me-1"
                                data-bs-toggle="modal" data-bs-target="#search-modal"><i
                                    class="fas fa-search"></i></button>
                                    @if($addUrl )
                            <a type="button" href="{{$addUrl}}" class="btn btn-danger waves-effect waves-light"><i
                                    class="mdi mdi-plus-circle me-1"></i> Add New</a>
                                    @endif
                        </div>
                    </div><!-- end col-->



                </div> <!-- end row -->
            </div>
        </div> <!-- end card -->
    </div>

</div>




<!-- search modal content -->
<div id="search-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                @php
                    $model = "App\\Models\\$modelName"; // the fully qualified name of the model class
                    $instance = new $model();
                    $sortItems = $instance->getFillable();
                    $perpage=(request()->input('perpage'))?request()->input('perpage'):"15";
                    $sort=(request()->input('sort'))?request()->input('sort'):"id";
                @endphp

                <form class="px-3" method="" action="">


                    <div class="mb-1">
                        <label for="perpage" class="me-2">perpage</label>
                        <select class="form-select my-1 my-md-0" id="perpagebox" name="perpage">
                            <option value="15" {{OptionSelect("15",$perpage)}}>15</option>
                            <option value="50" {{OptionSelect("50",$perpage)}}>50</option>
                            <option value="100" {{OptionSelect("100",$perpage)}}>100</option>
                            <option value="500" {{OptionSelect("500",$perpage)}}>500</option>
                            <option value="all" {{OptionSelect("all",$perpage)}}>All</option>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="status-select" class="me-2">Sort By</label>
                        <select class="form-select my-1 my-md-0" id="sortbox" name="sort">
                            <option value="id">Select</option>
                            @foreach ($sortItems as $sortItem)
                            <option value="{{$sortItem}}" {{OptionSelect($sortItem,$sort)}}>{{$sortItem}}
                            </option>
                            @endforeach

                        </select>
                    </div>


                    @foreach ($instance->searchFormItems() as $formItem)

                    @if($formItem['type']=='select')
                        <div class="mb-1">
                            <label for="{{$formItem['name']}}" class="form-label">{{$formItem['title']}}</label>
                            <select class="form-select my-1 my-md-0" id="sortbox" name="{{$formItem['name']}}">
                                <option value="">Select</option>
                                @foreach ($formItem['options'] as $item)
                                    <option value="{{$item->id}}"
                                        {{OptionSelect($item->id,request()->input($formItem['name']))}}>
                                        {{$item->name}}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                    @elseif($formItem['type']=='checkbox')
                        <div class="mb-1">
                            <label for="{{$formItem['name']}}" class="form-label">{{$formItem['title']}}</label>
                            <select class="form-select my-1 my-md-0" id="sortbox" name="{{$formItem['name']}}">
                                <option  value="" >Select</option>

                                    <option
                                        {{OptionSelect("1",request()->input($formItem['name']))}} value="1">
                                        ON
                                    </option>

                                    <option
                                        {{OptionSelect("0",request()->input($formItem['name']))}} value="0">
                                        OFF
                                    </option>


                            </select>
                        </div>
                    @else
                    <x-FormInput :type="$formItem['type']" :title="$formItem['title']" :name="$formItem['name']" :value="request()->input($formItem['name'])"  :width="'12'" />
                    @endif

                    @endforeach


                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" id="searchBtn" type="submit">Search</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


