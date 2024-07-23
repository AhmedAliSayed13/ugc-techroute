<?php namespace App\Repositories\admin\order;

use App\Models\Order;
use App\Models\MainOption;
use DB;

class OrderAdminRepository implements OrderAdminInterface
{

    public function index(): array
    {
        $orders = Order::AcceptRequest(getFillableSort('Order'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "orders" => $orders
        );
        return $data;
    }
    public function show($id)
    {
        // return $id;
        $orders = Order::where('main_option_id', $id)->get();
        $data = [
            'main_option_id' => $id,
            'orders' => $orders,
        ];
        return $data;
    }
    public function edit($id): array
    {
        $order = Order::find($id);
        $data = array(
            "order" => $order,
        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {

            $order = Order::find($id);
            $order->name = $request->input('name');
            $order->is_active = $request->has('is_active') ? 1 : 0;
            $order->save();
            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function destroy($id): bool
    {
        try {

            DB::table("value_options")->where('id', $id)->delete();

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }
    public function orderConfirm($id): bool
    {
        try {

            $order = Order::find($id);
            if($order->status==4 &&  $order->paid){
                $order->status= 5;
                $order->save();
            }

            toastr()->success('Item Has Been Deleted Successfully');
            return true;

        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }

}
