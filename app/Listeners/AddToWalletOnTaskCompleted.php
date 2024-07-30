<?php

namespace App\Listeners;

use App\Events\TaskCompleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Transaction;
class AddToWalletOnTaskCompleted
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\TaskCompleted  $event
     * @return void
     */
    public function handle(TaskCompleted $event)
    {
        $task = $event->task;

        $transcation=Transaction::where('task_id',$task->id)->where('wallet_type_id',1)->first();
        if ($task->task_status_id == 3 && !$transcation) {
            $creator = $task->creator;
            $wallet = $creator->wallet(1);
            $order=$task->order;
            $purchaseTransaction = Transaction::create([
                'wallet_type_id' => 1,
                'wallet_id' => $wallet->id,
                'order_id' => $order->id,
                'task_id' => $task->id,
                'amount' => $order->video_price,
                'type'=>'task_completed',
                'transaction_status_id'=>2
            ]);
            $task->creator=$creator;
            $creator->wallet(1)->incrementBalance($purchaseTransaction);
        }
    }
}
