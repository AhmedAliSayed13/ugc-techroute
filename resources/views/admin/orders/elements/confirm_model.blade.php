<button type="button" class="btn btn-primary btn-xs waves-effect waves-light" data-bs-toggle="modal"
    data-bs-target="#centermodal"><i class="fe-check-square"></i></button>

<div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myCenterModalLabel">Confirm
                    Order</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to confirm this order?</p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{route('admin.orders.confirm',$order->id)}}">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="confirmAction">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>
