<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function test()
    {
        // return 123;
        // $client = new Client();
        // $response = $client->get($this->url);
        // $body = $response->getBody();
        // $data = json_decode($body, true);
        // Mail::to('ahmedalisayed13@gmail.com')->send(new SendReqisterFormCreator('asdasd', 'asdasd'));
        // $task=Task::find(1);
        // $transcation=Transaction::where('task_id',$task->id)->where('wallet_type_id',1)->first();
        // if ( !$transcation) {

        //     $creator = $task->creator;
        //     $order=$task->order;
        //     $purchaseTransaction = Transaction::create([
        //         'wallet_type_id' => 1,
        //         'order_id' => $order->id,
        //         'task_id' => $task->id,
        //         'amount' => $order->video_price,
        //     ]);
        //     $task->creator=$creator;
        $wallet=Auth::user()->wallet(2);
        return $wallet->id;
        // }

    }

}
