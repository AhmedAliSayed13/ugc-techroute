<div>
    @if($show)

    <a type="button" data-bs-toggle="modal" data-bs-target="#show-modal-{{$id}}" class="action-icon">
        <i class="mdi mdi-eye"></i>
    </a>




    <div class="modal fade" id="show-modal-{{$id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ShowDetails</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach ($item->showDetails() as $key=>$value )
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <h5>{{$key}} :</h5>
                                    <p class="card-text">{{$value}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    @endif


    @if($edit)
    <a href="{{$edit}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>

    @endif


    @if($delete)
    <a type="button" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$id}}" class="action-icon"> <i
            class="mdi mdi-delete"></i></a>
    <div id="delete-modal-{{$id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content modal-filled bg-danger">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="text-center">
                        <form action="{{$delete}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <i class="dripicons-trash h1 text-white"></i>
                            <h4 class="mt-2 text-white">Delete</h4>
                            <p class="mt-3 text-white">Are you sure you want to delete this item</p>
                            <button type="submit" class="btn btn-light my-2">confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    @foreach ( $items as $key=>$value)
    <a href="{{$value}}" class="action-icon"> <i class="mdi {{$key}}"></i></a>
    @endforeach


</div>