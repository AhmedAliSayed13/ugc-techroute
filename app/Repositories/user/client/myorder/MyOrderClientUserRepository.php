<?php namespace App\Repositories\user\client\myorder;

use App\Models\Order;
use App\Models\OrderRequest;
use App\Models\Shipping;
use App\Models\Task;
use Auth;
use Illuminate\Support\Facades\DB;

class MyOrderClientUserRepository implements MyOrderClientUserInterface
{

    public function index(): array
    {
        $orders = Order::where(['user_id' => Auth::user()->id])->orderBy('created_at', 'desc')->paginate(Request()->limit ?? 10);
        $data = array(
            'orders' => $orders,
        );
        return $data;
    }
    public function edit($id)
    {
        $order = Order::find($id);

        if ($order->status == 1) {
            return route('client.order.checkout', $order->key);
        } elseif ($order->status == 2) {
            return route('client.order.product', $order->key);
        } elseif ($order->status == 3) {
            return route('client.order.criteria', $order->key);
        } else {
            return route('client.order.details');
        }

    }
    public function show($id): array
    {
        $order = Order::where(['id' => $id, 'user_id' => auth()->user()->id])->first();
        $data = array(
            'order' => $order,
        );
        return $data;
    }
    public function orderCreators($id): array
    {
        $order = Order::where(['id' => $id, 'user_id' => auth()->user()->id])->first();
        $data = array(
            'order' => $order,
            'orderRequests' => $order->orderRequests,
        );
        return $data;
    }
    public function orderDelivery($id): array
    {
        $order = Order::with('tasks')->where(['id' => $id, 'user_id' => auth()->user()->id])->first();
        $data = array(
            'order' => $order,
            'tasks' => $order->tasks,
            // ->where('video', '!=',null)
            // ->whereIn('task_status_id', [2,3,4])
        );
        return $data;
    }
    public function chooseCreator($request, $id)
    {
        DB::beginTransaction();
        try {
            $orderRequest = OrderRequest::where(['id' => $id])->first();
            $orderRequest->update(['status' => $request->status]);
            if ($request->status == 1) {
                $order = $orderRequest->order;

                $task = Task::create(
                    [
                        'order_id' => $orderRequest->order_id,
                        'client_id' => $order->user_id,
                        'creator_id' => $orderRequest->creator_id,
                        'order_request_id' => $orderRequest->id,
                    ]
                );
                Shipping::create(
                    [
                        'task_id' => $task->id,
                        'order_id' => $task->order_id,
                        'creator_address' => $task->creator->creatorInfo->shipping_address,
                    ]
                );
            }
            DB::commit();
            toastr()->success(__('messages.success'), __('messages.successOperation'));
            return 1;

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Loop through all validation errors and flash them to the session
            foreach ($e->validator->errors()->all() as $error) {
                toastr()->error(__('messages.error'), $error);
            }
            return back()->withErrors($e->validator)->withInput();
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'), $th->getMessage());
            return 0;
        }

    }
    public function orderDeliveryConfirm($id): bool
    {
        try {
            $task = Task::where(['id' => $id, 'client_id' => auth()->user()->id])->first();
            $task->task_status_id = 3;
            $task->save();
            $task->createAcceptMessage();
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
            return true;
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'), $th->getMessage());
            return false;
        }
    }
    public function orderDeliveryModification($id): bool
    {
        try {
            $task = Task::where(['id' => $id, 'client_id' => auth()->user()->id])->first();
            $task->task_status_id = 4;
            $task->save();
            $task->createModificationMessage();
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
            return true;
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'), $th->getMessage());
            return false;
        }
    }

}
